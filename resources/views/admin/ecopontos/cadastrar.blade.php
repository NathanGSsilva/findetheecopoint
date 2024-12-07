@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar EcoPontos</h2>
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

        <form action="{{ route('ecopontos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <!--  gera campo de segurança -->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="endereco">Endereco:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('endereco') }}">
            </div>
            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}" >
            </div>
            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="text" class="form-control" id="longitude" name="longitude" ></input>
            </div>
            <div class="form-group">
                <label for="funcionamento">Horario de Funcionamento:</label>
                <input type="text" class="form-control" id="funcionamento" name="funcionamento" placeholder="Exe: Seg. à Sex. das 09:00 as 18:00"></input>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" ></input>
            </div>
            <div class="form-group">
                <label for="lixos">Tipos de lixo aceito:</label>
                <input type="text" class="form-control" id="lixos" name="lixos" placeholder="Exe: domestico, eletronico, industrial..."></input>
            </div>
            
            <div class="form-group">
                <label for="foto">Imagem:</label>
                <input type="file" class="form-control" id="foto" name="fotos[]" multiple></input>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            <a href="{{ route('ecopontos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>

    </div>

@endsection
