@extends('admin.dashboard')

@section('conteudo')
<div class="d-flex justify-content-between mt-3">
    <h2>Lista de Usuarios</h2>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Cadastrar</a>
</div>

<hr>

@if (@session('sucesso'))

<div class="alert alert-success">

    {{session('sucesso')}}

</div>

@endif

@if (@session('error'))

<div class="alert alert-danger">

    {{session('error')}}

</div>

@endif


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($usuario as $user)

        <tr>
            <td>{{ $user -> id }}</td>

            <td>{{ $user -> nome }}</td>
            <td>{{ $user -> email }}</td>

            <td>
                <a href="{{ route('usuarios.show',['id'=> $user -> id]) }}" class="btn btn-primary">Visualizar</a>
                <a href="{{ route('usuarios.edit', ['id' => $user -> id]) }}" class="btn btn-secondary">Editar</a>


                <form action="{{ route('usuarios.destroy', ['id' => $user -> id]) }}" style="display: inline-block" method="post">
                    </style>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm ('Tem certeza que deseja excluir ?')">Excluir</button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

<div class="d-flex justify-content-center">
        {{-- {{ $ecopontos->links('pagination::bootstrap-4') }} --}}
    </div>
@endsection