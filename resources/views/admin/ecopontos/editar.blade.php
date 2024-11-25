@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar EcoPontos</h2>
    </div>

    <hr>

    @if ($errors->any())
        
    <div class="boxError alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
    </div>
        
    @endif

    <div class="container">

        <form action="{{ route('ecopontos.update', ['id' => $ecoponto->id ]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}"></input>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('latitude') }}"></input>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('latitude') }}"></input>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco"  value="{{ old('latitude') }}"></input>
            </div>
            
            <p></p>
            
            <p class="alert alert-info">mantenha o campo vazio, caso deseja manter a senha atual</p>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            <a href="{{ route('ecopontos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>

@endsection