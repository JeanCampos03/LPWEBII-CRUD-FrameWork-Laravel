@extends('template_admin.index')

@section('conteudo')
    <h2>Você está em carros</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th >Marca</th>
                <th >Modelo</th>
                <th>Cor</th>
                <th >Ano</th>
                <th >Editar</th>

            </tr>

        </thead>
        <tbody>

            @foreach($carros as $linha)

            <tr>
                <td>{{ $linha-> marca}}</td>
                <td>{{ $linha-> modelo}}</td>
                <td>{{ $linha-> cor}}</td>
                <td>{{ $linha-> ano_fabricacao}}</td>
        <!--    <td><a  href="{{route('carros.buscar', $linha->id)}}" class='btn btn-primary'> E </a> </td> -->
                <td> <a href="{{route('carros.buscar', $linha-> id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
</svg></a> </td>

            </tr>
                <!-- <li>{{ $linha->modelo }}</li> -->
            @endforeach

        </tbody>
    </table>
@endsection
