@extends("template_admin.index")

@section("conteudo")

<div class="container">
    <div class="row mb-4">
        <h1>Cadastro de Produtos</h1>
    </div>

    {{-- Mensagens de sucesso --}}
    @if(session("success"))
        <div class="alert alert-success" role="alert">
            {{ session("success") }}
        </div>
    @endif

    {{-- Mensagens de erro --}}
    @if ($errors->any())
        @foreach($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{ $erro }}
            </div>
        @endforeach
    @endif

    <form id="form-produtos" method="post" action="{{ route('registra.produto') }}" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do item"
                value="{{ old('descricao') }}">
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Valor do item</label>
            <input type="number" step="0.01" name="preco" id="preco" class="form-control" placeholder="Digite o valor"
                value="{{ old('preco') }}">
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="Quantidade em estoque"
                value="{{ old('quantidade') }}">
        </div>

        <div class="mb-3">
            <label for="dtEntrada" class="form-label">Data de Entrada</label>
            <input type="date" name="dtEntrada" id="dtEntrada" class="form-control"
                value="{{ old('dtEntrada') }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success w-100">Salvar</button>
        </div>
    </form>
</div>

@endsection
