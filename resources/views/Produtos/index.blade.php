@extends('template_admin.index')

@section('conteudo')
    <h2>Você está em Produtos</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th >Descrição</th>
                <th >Preço</th>
                <th >Entrada Estoque</th>
                <th >Opções</th>
            </tr>

        </thead>
        <tbody>

            @foreach($produtos as $linha)

            <tr>
                <td>{{ $linha-> nome}}</td>
                <td>{{ $linha-> preco}}</td>
                <td>{{ $linha-> dtEntrada}}</td>
                <td> <a href="settins_car"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
</svg></a> </td>

            </tr>
                <!-- <li>{{ $linha->modelo }}</li> -->
            @endforeach

        </tbody>
    </table>
@endsection
