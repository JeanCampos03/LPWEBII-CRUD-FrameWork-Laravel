@extends("template_admin.index")

@section("conteudo")

<h2 class="mt-4 mb-4">Alterar Cliente</h2>

<div class="container">
    <form action=" {{ route('cliente.altera') }}" method="post" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" id="id" class="form-control" value="{{ $cliente->id }}">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $cliente->nome }}">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $cliente->cpf }}">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $cliente->telefone }}">
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="form-control" value="{{ $cliente->sexo }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $cliente->email }}">
        </div>

        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="text" name="data_nascimento" id="data_nascimento" class="form-control" value="{{ $cliente->data_nascimento }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success w-100">Atualizar</button>
        </div>
    </form>
</div>

@endsection
