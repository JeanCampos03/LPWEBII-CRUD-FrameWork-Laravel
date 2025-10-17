<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produtos;
use Carbon\Carbon;

use function PHPUnit\Framework\isEmpty; 

class ProdutoController extends Controller
{       
    public function index()
    {

        $produtos = Produtos::all();


        return view('produtos.index',
        compact('produtos'));
    }

    public function recebeDados(Request $req)
    {
        //validar se o nome foi digitado

        $validador = $req->validate(
            [
            'descricao'=> 'required|min:3',
            'preco' => 'required|numeric|gt:0',
            'quantidade'=> 'required',
            'dtEntrada' => 'required'
            ],
    [
            'descricao.required' => 'O campo descrição é obrigatório',
            'descricao.min'=> 'Descrição precisa ter no mínimo 3 caracteres',
            'preco.required' => 'O campo preço é obrigatório',
            'preco.gt'=> 'Valor não pode ser negativo',
            'quantidade.required' => 'O campo quantidade é obrigatório',
            'quantidade.min' => 'É preciso possuir pelo menos 1 item',
            'dtEntrada.required' => 'O campo Data Entrada é obrigatório'
            ]

    );

        //input name="nome"  
echo $req->input('nome');

return redirect()->route("produtos")
->with('success', "Produto salvo com sucesso!");

/*
        echo "Nome informado: " . $req->input('nome');
        echo "<br>CPF informado: " . $req->input('cpf');
        echo "<br>Telefone informado: " . $req->input('telefone');
        echo "<br>E-mail informado: " . $req->input('email');
        echo "<br>Gênero informado: " . $req->input('sexo');        
        echo "<br>Data de Nascimento informado: " . $req->input('date-nasc'); 
        */
    }


    public function cadastrarProdutos(Request $request) 
    {
        $produto = new Produtos();
        $produto->nome = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $dataFormatada = Carbon::parse($request->input('dtEntrada'))->format('Y-m-d');
        $produto->dtEntrada = $dataFormatada;

        
        $produto->save();

        return redirect()->route('produtos.index');

    }
    

}