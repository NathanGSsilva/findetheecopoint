@extends('admin.dashboard')

@section('conteudo')
<div class="d-flex justify-content-between mt-3">
    <h2>Lista de EcoPontos</h2>
    <a href="{{ route('ecopontos.create') }}" class="btn btn-primary">Cadastrar</a>
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
            <th>Localização</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($ecoponto as $ponto)

        <tr>
            <td>{{ $ponto -> id }}</td>

            <td>{{ $ponto -> nome }}</td>
            <td>{{ $ponto -> latitude }}</td>
            <td>
                <a href="{{ route('ecopontos.show',['id'=> $ponto -> id]) }}" class="btn btn-primary">Visualizar</a>
                <a href="{{ route('ecopontos.edit', ['id' => $ponto -> id]) }}" class="btn btn-secondary">Editar</a>


                <form action="{{ route('ecopontos.destroy', ['id' => $ponto -> id]) }}" style="display: inline-block" method="post">
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