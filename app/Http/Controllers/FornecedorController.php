<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 =>[
                'nome' => 'Fornecedor',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '81',
                'telefone' => '99117-0849'
            ],
            1 =>[
                'nome' => 'Fornecedor',
                'status' => 'S',
                'ddd' => '12',
                'telefone' => '99109-2780',
            ],
            2 =>[
                'nome' => 'Fornecedor',
                'status' => 'S',
                'cnpj' => '',
            ],
            3 =>[
                'nome' => 'Fornecedor',
                'status' => 'S',

            ],


        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
