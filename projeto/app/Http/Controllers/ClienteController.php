<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function index() 
    {
        //$carros = "SELECT * FROM carros";
        $clientes = Cliente::all();
        //var_dump($clientes);

        //compact
        //echo "chegou no controller carros";
        return view('clientes.index',
        compact(var_name: 'clientes'));
    }


    public function cadastrarNovoCliente(Request $request)
    {

                $validador = $request->validate(
            [
            'nome'=> 'required|min:3',
            'cpf' => 'required|min:11',
            'email'=> 'required'
            ],
    [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.min'=> 'Nome precisa ter no mínimo 3 caracteres',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.min'=> 'CPF precisa ter no mínimo 11 caracteres',
            'email.required' => 'O campo E-mail é obrigatório',
            ]

    );
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->telefone = $request->input('telefone');
        $cliente->email = $request->input('email');
        $cliente->sexo = $request->input('sexo');
        $cliente->data_nascimento = $request->input('date-nasc');

        
        $cliente->save();

        return redirect()->route('clientes');
    }
    
        public function buscarCliente($id) 
    {
        $cliente = Cliente::find($id);

        if (!$cliente)
            echo "Cliente não encontrado";

        return view('clientes.altera', compact('cliente'));

    }


        public function atualizaCliente(Request $request) 
    {
        $cliente = Cliente::find($request->input('id'));
        $cliente->update($request->all());

        /*
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');

        $carro->save();
*/
        return redirect()->route('clientes');

    }


    public function excluirCliente($id) 
    {
         $cliente = Cliente::find($id);

        if (!$cliente)
            echo "Cliente não encontrado";

        $cliente->delete();

        return redirect()->route('clientes');

    }


    

}
