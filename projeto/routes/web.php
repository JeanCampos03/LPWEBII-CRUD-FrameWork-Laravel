<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', function () {
    return view('welcome');
});


//Clientes get
Route::get(
    '/clientes/{id}',
    [ClienteController::class, 'buscarCliente']
)->name('cliente.buscar');

Route::get(
    '/clientes',
    [ClienteController::class, 'index']
    ) ->name('clientes');

    Route::get(
    '/cliente/novo',
    function () {
        return view ('clientes.cadastrar');
    }
)->name('cliente.novo');

Route::get(
    '/clientes/excluir/{id}',
    [ClienteController::class, 'excluirCliente']
)->name('cliente.excluir');


//Clientes post
Route::post(
    '/clientes/atualizar',
    [ClienteController::class, 'atualizaCliente']
)->name('cliente.altera');

Route::post(
    '/clientes/cadastro',
    [ClienteController::class, 'cadastrarNovoCliente']
)->name('cadastro.cliente');


//Carros get
Route::get('/carro/novo', function () {
    return view('carros.cadastrar');
})->name("novo.carro");

Route::get(
    '/carros',
    [CarrosController::class, 'index']
)->name('carros.index');

Route::get(
    '/carros/{id}',
    [CarrosController::class, 'buscarCarro']
)->name('carros.buscar');


//Carros post
Route::post(
    '/carros/atualizar',
    [CarrosController::class, 'ataualizaCarro']
)->name('carros.altera');

Route::post(
    '/carros/cadastrar',
    [CarrosController::class, 'cadastrarNovoCarro']
)->name('cadastro.carros');

Route::post(
    '/carros/atualizar',
    [CarrosController::class, 'ataualizaCarro']
)->name('carros.alterar');

//Produtos get
Route::get('/produto/novo', function () {
    return view('produtos.cadastrar');
})->name("cadastrar.produto");

Route::get(
    '/produtos',
    [ProdutoController::class, 'index']
)->name('produtos.index');

//Produtos post
Route::post(
    '/produtos/cadastrar',
    [ProdutoController::class, 'cadastrarProdutos']
)->name('registra.produto');

Route::post(
    '/produtos',
    [ProdutoController::class, 'recebeDados']
)->name('produto-novo');


//TestePokemon
Route::get(
    '/pokemon',
    [PokemonController::class, 'index']
)->name('pokemon.index');