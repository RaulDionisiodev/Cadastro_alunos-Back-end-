<?php

namespace App\Http\Controllers;

use App\aluno;
use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class alunos extends Controller
{
    //Exibe todos os alunos cadastrados     

     public function index($id = null)
    {
        if($id==null){
        return aluno::all();
        //orderBy('id','asc')->get();
        }else {
            return $this->show($id);
        }
    }

    //salva um novo registro

    public function store(Request $request)
    {
        $post = new aluno();

        $post->nome = $request->input('nome');
        $post->nascimento = $request->input('nascimento');
        $post->serie = $request->input('serie');
        $post->save();

        return 'Aluno cadastrado com o ID '.$post->id;
    }

    //Exibe um aluno específico

    public function show($id)
    {
        return aluno::find($id);
    }

    // Edita o caastro de um aluno

    public function update(Request $request, $id)
    {
        $aluno = aluno::find($id);

        $aluno->nome = $request->input('nome');
        $aluno->nascimento = $request->input('nascimento');
        $aluno->serie = $request->input('serie');
        $aluno->save();

        return 'Aluno #'.$aluno->id.' editado com sucesso.';
    }

    // Remover um aluno do banco de dados

    public function destroy(Request $request, $id)
    {
        $aluno = aluno::find($id);
        $aluno->delete();

        return "Aluno #".$aluno->id." apagado com sucesso.";
    }

}
