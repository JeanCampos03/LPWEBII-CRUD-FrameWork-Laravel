@extends("template_admin.index")

@section("conteudo")

<h2 class="mt-4 mb-4">Alterar Carro</h2>

<div class="container">
    <form action=" {{ route('cliente.altera') }}" method="post" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" id="id" class="form-control" value="{{ $carro->id }}">
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" value="{{ $carro->marca }}">
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $carro->modelo }}">
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" name="cor" id="cor" class="form-control" value="{{ $carro->cor }}">
        </div>

        <div class="mb-3">
            <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
            <input type="text" name="ano_fabricacao" id="ano_fabricacao" class="form-control" value="{{ $carro->ano_fabricacao }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success w-100">Atualizar</button>
        </div>
    </form>
</div>

@endsection
