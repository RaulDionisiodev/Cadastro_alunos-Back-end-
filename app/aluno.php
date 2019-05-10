<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    protected $fillable = array('id','nome', 'nascimento', 'serie', 'cep', 'rua', 'numero', 'complemento', 'bairro', 'cidade', 'estado', 'nome_mae', 'data_mensalidade', 'cpf_mae');

}
