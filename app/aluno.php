<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    protected $fillable = array('id','nome', 'nascimento', 'serie' );
}
