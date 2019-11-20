<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lousa extends Model
{
    protected $fillable =['sala_id','modelo'];

    function sala(){
        return $this->belongsTo(Sala::class);
    }
}
