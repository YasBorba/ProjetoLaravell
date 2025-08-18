<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    //Listar todas as tarefas 
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    //Exibir o formulario
    public function create()
    {
        return view('tarefas.create');
    }

    //Salvar a nova tarefa 
    public function store(Request $request)
    {
        Tarefa::create($request->all());
        return redirect()->route('tarefas.index');
    }

    //Exibir o formulario com dados da tarefa
    public function edit(Tarefa $tarefa)
    {
        return view('tarefas.edit', compact('tarefa'));
    }

    //Salvar as alterações
    public function update(Request $request, Tarefa $tarefa)
    {
        $tarefa->update($request->all());
        return redirect()->route('tarefas.index');
    }

    //Excluir uma tarefa
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}
