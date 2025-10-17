@extends('template_admin.index')

@section('conteudo')
<h2>Você está em clientes</h2>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

    </thead>
    <tbody>

        @foreach($clientes as $linha)

        <tr>
            <td>{{ $linha-> nome}}</td>
            <td>{{ $linha-> cpf}}</td>
            <td>{{ $linha-> telefone}}</td>
            <td>{{ $linha-> email}}</td>
            <td>{{ $linha-> sexo}}</td>
            <td>{{ $linha-> data_nascimento}}</td>
            <td> <a href="{{route('cliente.buscar', $linha-> id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                    </svg></a> </td>
            <td><a href="{{ route('cliente.excluir', $linha-> id) }}">
                <img src="{{ asset('admin/img/delete.png') }}" style="width:20px; height:20px; ">
            </a></td>
            


        </tr>
        <!-- <li>{{ $linha->modelo }}</li> -->
        @endforeach

    </tbody>
</table>
@endsection