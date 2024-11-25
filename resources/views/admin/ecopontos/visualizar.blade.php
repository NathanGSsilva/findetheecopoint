@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Usuarios</h2>
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
    </div>

    <hr>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $ecoponto-> id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $ecoponto-> nome }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $ecoponto-> latitude }}</td>
        </tr>
        <tr>
            <th>Longitude</th>
            <td>{{ $ecoponto-> longitude }}</td>
        </tr>
        <tr>
            <th>Categoria</th>
            <td>{{ $ecoponto-> categoria }}</td>
        </tr>
        <tr>
            <th>Endereço</th>
            <td>{{ $ecoponto-> endereco }}</td>
        </tr>
    </table>
    <a href="{{ route('ecopontos.edit', ['id'=> $ecoponto->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('ecopontos.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
