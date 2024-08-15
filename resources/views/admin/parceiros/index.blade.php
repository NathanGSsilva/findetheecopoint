@extends('admin.dashboard')

@section('conteudo')
<div class="d-flex justify-content-between mt-3">
    <h2>Lista de Parceiros</h2>
    <a href="{{ route('parceiros.create') }}" class="btn btn-primary">Cadastrar</a>
</div>

<hr>

@if (@session('sucesso'))

<div class="alert alert-success">

    {{session('sucesso')}}

</div>
@endif

@if (@session('error'))

<div class="alert alert-error">

    {{session('error')}}

</div>
@endif


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($parceiro as $parc)

        <tr>
            <td>{{ $parc -> id }}</td>

            <td>{{ $parc -> nome }}</td>
            <td>{{ $parc -> email }}</td>
            <td>{{ $parc -> telefone }}</td>
            <td>
                <a href="{{ route('parceiros.show',['id'=> $parc -> id]) }}" class="btn btn-primary">Visualizar</a>
                <a href="{{ route('parceiros.edit', ['id' => $parc -> id]) }}" class="btn btn-secondary">Editar</a>


                <form action="{{ route('parceiros.destroy', ['id' => $parc -> id]) }}" style="display: inline-block" method="post">
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