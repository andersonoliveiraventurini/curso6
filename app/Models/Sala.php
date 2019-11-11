<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    // declara tudo que poderá ser enviado
    protected $fillable = ['nome', 'qtdAlunos'];

    // declara o que não será enviado
    //protected $guarded = ['ativo'];
}
