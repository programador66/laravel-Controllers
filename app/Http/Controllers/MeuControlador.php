<?php

namespace App\Http\Controllers;

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

}