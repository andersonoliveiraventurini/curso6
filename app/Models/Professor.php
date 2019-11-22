<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';

    function salas(){
        return $this->belongsToMany(Sala::class)->withPivot('horario');
    }
}
