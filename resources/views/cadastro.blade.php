@extends('layout.site-geral')

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

                            <div id="imgBusca1">
                                <img src="img/foto-logo-branca.svg" alt="logo-empresa">
                            </div>

                            <form action="{{ route('usuarios.store') }}" method="POST" id="barraBusca">
                            @csrf

                                <div class="cep1">
                                    <label for="nome"> <h3>Digite seu nome</h3> </label>
                                    <input type="text" id="nome" name="nome" value="" placeholder="Digite seu nome">
                                </div>

                                <div class="cep1">
                                    <label for="email"> <h3>Email</h3> </label>
                                    <input type="text" id="email" name="email" value="" placeholder="Digite seu email">
                                </div>

                                <div class="cep1">
                                    <label for="senha"> <h3>Senha</h3> </label>
                                    <input type="password" id="senha" name="senha" value="" placeholder="Digite sua senha">
                                </div>

                                <div class="cep1">
                                    <label for="cfsenha"> <h3>Confirme a senha</h3> </label>
                                    <input type="text" id="cfsenha" name="cfsenha" value="" placeholder="Confirme sua senha">
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
