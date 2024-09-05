@extends('layout.site-home')

@section('conteudo')
    <main>
        <section>

            <div id="banner3"></div>

            <div id="textoParceiro">
                <div class="container">
                    <p>login</p>
                    <h3 id="parceiro1">Quer fazer parte da equipe Findtheecopoint?</h3>
                </div>
            </div>

            <div class="container">

                <div id="borderSobre"></div>

                <section>

                    <div class="container">

                        <h2 class="space-title2">É bem facil, basta preencher o formulario e enviar!</h2>

                        <div id="menuBusca1">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $erro)
                                            <li>{{ $erro }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div id="imgBusca1">
                                <img src="img/foto-logo-branca.svg" alt="logo-empresa">
                            </div>

                            <form action="{{ route('login') }}" method="POST" id="barraBusca">
                                @csrf

                                <div class="cep1">
                                    <label for="email">
                                        <h3>Email</h3>
                                    </label>
                                    <input type="text" id="email" name="email" value=""
                                        placeholder="Digite seu email">
                                </div>

                                <div class="cep1">
                                    <label for="password">
                                        <h3>Senha</h3>
                                    </label>
                                    <input type="password" id="password" name="password" value=""
                                        placeholder="Digite sua senha">
                                </div>

                                <button type="submit" name="botao-busca1" class="botao-busca">Enviar</button>


                            </form>

                        </div>

                    </div>

                </section>

            </div>
            <div id="borderSobre"></div>
        </section>
    </main>
@endsection
