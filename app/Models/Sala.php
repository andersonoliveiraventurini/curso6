<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{

    protected $attributes = ['ativo'=>1, 'projetor'=>1];

    // declara tudo que poderá ser enviado
    protected $fillable = ['nome', 'qtdAlunos'];

    // declara o que não será enviado
    //protected $guarded = ['ativo'];

    public function lousa(){
        return $this->hasOne(Lousa::class);
    }

    public function scopeTemAlunos($query){
        return $query->where('qtdalunos','>',0);
    }

    public function getAtivoAttribute($atributo){
        return [
            0 => 'Desativada',
            1 => 'Ativa'
        ][$atributo];

        //$a = [0=>'desativado', 1=>'ativo'];return $a[$atributo];
    }

    public function getProjetorAttribute($attr){
        //$nomes = [0=>'Não',1=>'Sim'];
        //return $nomes[$attr];

        if($attr==1)
            return "SIM";
        else
            return "NAO";
    }
    
}
