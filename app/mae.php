<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mae extends Model
{
    protected $fillable = array('id','aluno_id', 'nome', 'data_mensalidade', 'cpf' );

    public function aluno()
    {
        return $this->belongsTo(aluno::class);
    }

}
