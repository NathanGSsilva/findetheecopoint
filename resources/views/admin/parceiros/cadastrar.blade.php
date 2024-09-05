@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Parceiros</h2>
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

        <form action="{{ route('parceiros.store') }}" method="POST">
            @csrf <!--  gera campo de segurança -->

            <h3>Infomações basicas</h3>

            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço completo:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('latitude') }}">
            </div>
            <div class="form-group">
                <label for="site">Site oficial:</label>
                <input type="text" class="form-control" id="longitude" name="longitude"></input>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="categoria" name="categoria"></input>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="endereco" name="endereco"></input>
            </div>

            <p></p>
            <h3>Responsavel pelo contato</h3>
            <p></p>

            <div class="form-group">
                <label for="name">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>

            <div class="form-group">
                <label for="latitude">Cargo/Função:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}">
            </div>

            <div class="form-group">
                <label for="longitude">Telefone:</label>
                <input type="text" class="form-control" id="longitude" name="longitude"></input>
            </div>

            <div class="form-group">
                <label for="categoria">Email</label>
                <input type="text" class="form-control" id="categoria" name="categoria"></input>
            </div>
            
            <div class="form-group">
                <label for="endereco">Telefone:</label>
                <input type="text" class="form-control" id="endereco" name="endereco"></input>
            </div>

            <p></p>
            <h3>Informações Jurídicas e Fiscais</h3>
            <p></p>

            <div class="form-group">
                <label for="name">CNPJ/CPF:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="latitude">Inscrição Estadual:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}">
            </div>
            <div class="form-group">
                <label for="longitude">Razão social:</label>
                <input type="text" class="form-control" id="longitude" name="longitude"></input>
            </div>
            <div class="form-group">
                <label for="categoria">Endereço Fiscal</label>
                <input type="text" class="form-control" id="categoria" name="categoria"></input>
            </div>
            <div class="form-group">
                <label for="endereco">Telefone:</label>
                <input type="text" class="form-control" id="endereco" name="endereco"></input>
            </div>

            <p></p>
            <input type="checkbox"> Aceito os termos de contrato
            <p></p>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            <a href="{{ route('ecopontos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>

       

    </div>

@endsection
