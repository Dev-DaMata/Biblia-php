<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testamento extends Model
{
    use HasFactory;

    protected $fillable = ['nome']; //informações do banco(colunas)

    //public $timeStamps = false; //para não utilizar a coluna da data de criação da tabela

}
