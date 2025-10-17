<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function index() 
    {
        //$carros = "SELECT * FROM carros";
        $carros = Carros::all();
        //var_dump($carros);

        //compact
        //echo "chegou no controller carros";
        return view('carros.index',
        compact('carros'));
    }


    public function cadastrarNovoCarro(Request $request)
    {
        $carro = new Carros();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        
        $carro->save();

        return redirect()->route('carros.index');
    }


    public function buscarCarro($id) 
    {
        $carro = Carros::find($id);

        if (!$carro)
            echo "Carro não encontrado";

        return view('carros.alterar', compact('carro'));

    }

    public function ataualizaCarro(Request $request) 
    {
        $carro = Carros::find($request->input('id'));
        $carro->update($request->all());

        /*
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');

        $carro->save();
*/
        return redirect()->route('carros.index');

    }
}