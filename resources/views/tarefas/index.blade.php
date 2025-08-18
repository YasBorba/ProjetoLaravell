<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(45deg, #007bff, #17a2b8, #6f42c1);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 3rem;
            color: #ffffff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .card-sereia {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border: none;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        .btn-sereia {
            color: #ffffff;
            border-color: #ffffff;
            transition: all 0.3s ease;
        }
        .btn-sereia:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: #ffffff;
            color: #ffffff;
        }
        .list-group-item-sereia {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .list-group-item-sereia .btn {
            margin-left: 0.5rem;
        }
    </style>
</head>
<body>

    <div class="card card-sereia">
        <h1 class="display-4 fw-bold text-center text-white">Lista de Tarefas 🐚</h1>
        
        <div class="text-center my-4">
            <a href="{{ route('tarefas.create') }}" class="btn btn-outline-light btn-lg btn-sereia">
                Adicionar Nova Tarefa
            </a>
        </div>

        <ul class="list-group">
            @foreach ($tarefas as $tarefa)
                <li class="list-group-item list-group-item-sereia">
                    <span>{{ $tarefa->titulo }}</span>
                    <div>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-sm btn-outline-info btn-sereia">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger btn-sereia">Excluir</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>