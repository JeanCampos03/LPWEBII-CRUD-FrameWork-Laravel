@extends("template_admin.index")

@section("conteudo")


    <div class="row row mb-3">
        <h1>Cadastro de Clientes</h1>
    </div>
    @if(session("success"))
                <div class="alert alert-success" role="alert">
                {{session("success")}}
            </div>
@endif

    @if ($errors->any())
        @foreach($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{$erro}}
            </div>
        @endforeach
    @endif

    <form id="form-clientes" method="post" action="{{ route('cadastro.cliente') }}">
        @csrf
        <div class="col">
            <div class="row">
                <div class="form-floating mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" value="{{ old('nome') }}">
                </div>
            </div>

            <div class="row">
                <div class="form-floating mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="999.999.999-99" value="{{ old('cpf') }}" >
                </div>
            </div>

            <div class="row">
                <div class="form-floating mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(14) 99999-9999" value="{{ old('telefone') }}">
                </div>
            </div>


            <div class="row mb-3">
                <div class="form-floating mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@email.com" value="{{ old('email') }}">
                </div>
            </div>


            <div class="row mb-3">
                <label for="sexo">Selecione um gênero</label>
            </div>

            <div class="row mb-3">
                <select class="form-select mb-3" name="sexo" id="sexo" aria-label="Floating label select example" value="{{ old('sexo') }}">
                    <option selected>Sexo</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>

            <div class="row mb-3">

                <div class="form-floating mb-3">
                    <label for="DtNascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="date-nasc" id="date-nasc" placeholder="dd/MM/aaaa" value="{{ old('date-nasc') }}">
                </div>
            </div>
    </form>

    <div class="col">
        <button type="submit" class='btn btn-outline-success' form="form-clientes" value="Clique">Salvar</button>
    </div>

@endsection