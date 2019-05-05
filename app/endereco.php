<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    protected $fillable = array('id','aluno_id', 'cep', 'rua', 'numero','bairro', 'cidade', 'estado' );

}
