<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
   use HasFactory;

   //Atribuição em massa dos campos
   protected $fillable = ['titulo', 'descricao','concluida'];
}
