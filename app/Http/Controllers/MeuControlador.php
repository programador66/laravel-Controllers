<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeuControlador extends Controller
{
    public function getNome()
    {
        return "Caio César Lacerda";
    }

    public function getIdade()
    {
        return "20 anos";
    }

    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function getNomeById($id)
    {
        $v = ['Rafael', 'daniel', 'ezequiel', 'juriel'];
        if ($id >= 0 && $id < count($v)) {
            return $v[$id];
        } else {
            return "nao encontrado!";
        }

    }

    public function listar()
    {

        $dados = DB::table('cfma025')->get();

        echo "<pre>";
        print_r($dados);

    }

    public function inserir(Request $request)
    {
        $dados['id_espera'] = $request->input('id_espera');
        $dados['qtd_espera'] = $request->input('qtd_espera');
        $dados['situacao'] = $request->input('situacao');
        $dados['id_usuario'] = $request->input('id_usuario');
        $dados['codigo_barra'] = $request->input('codigo_barra');
        $dados['id_produto'] = $request->input('id_produto');
        $dados['id_palete'] = $request->input('id_palete');
        $dados['log'] = $request->input('log');
        $dados['log_data'] = $request->input('log_data');
        $dados['log_hora'] = $request->input('log_hora');

        $retorno = DB::table('cfma025')->insert($dados);

        if ($retorno) {
            return response("Palete inserido!", 201);
        } else {
            return response("erro ao inserir!", 400);
        }

    }

}