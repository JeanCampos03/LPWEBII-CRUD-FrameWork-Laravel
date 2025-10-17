@extends('template_admin.index')

@section('conteudo')
    <h2>Pokemons</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th >Nome</th>
                <th >Tipo</th>
                <th >Nivel</th>
                <th >HP</th>
                <th>Ataque</th>
                <th>Image</th>
            </tr>

        </thead>
        <tbody>

            @foreach($pokemon as $linha)

            <tr>
                <td>{{ $linha-> nome}}</td>
                <td>{{ $linha-> tipo}}</td>
                <td>{{ $linha-> nivel}}</td>
                <td>{{ $linha-> hp}}</td>
                <td>{{ $linha-> ataque}}</td>
                <td> <img 
            src="https://img.pokemondb.net/sprites/home/normal/{{ strtolower($linha->nome) }}.png" 
            alt="{{ $linha->nome }}" 
            style="width:32px; height:auto;"
            onerror="this.onerror=null; this.src='https://img.pokemondb.net/sprites/home/normal/unknown.png';"
        > </td>
            
            </tr>
                <!-- <li>{{ $linha->modelo }}</li> -->
            @endforeach

        </tbody>
    </table>
@endsection
