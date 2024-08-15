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

                            <form action="{{ route('') }}" method="get" id="barraBusca">
                            @csrf
                                <div class="cep1">
                                    <label for="nome"> <h3>Nome:</h3> </label>
                                    <input type="text" id="nome" name="nome" value="" placeholder="Digite seu nome">
                                </div>

                                <div class="cep1">
                                    <label for=""> <h3>Digite seu nome</h3> </label>
                                    <input type="text" id="nome" name="nome" value="" placeholder="Digite seu nome">
                                </div>

                                <div class="cep1">
                                    <h3>Email</h3>
                                    <input type="text" placeholder="Digite seu email">
                                </div>

                                <div class="cep1">
                                    <h3>Senha</h3>
                                    <input type="text" placeholder="Digite seu contato">
                                </div>

                                <div class="cep1">
                                    <h3>Confirme a senha</h3>
                                    <input type="text" placeholder="Digite seu enderço">
                                </div>

                                <button type="submit" name="botao-busca1" class="botao-busca">Enviar</button>



                                <form action="{{ route('parceiros.store') }}" method="POST" id="barraBusca">
                                    @csrf
                                        <div class="cep1">
                                            <label for="nome"> <h3>Nome:</h3> </label>
                                            <input type="text" id="nome" name="nome" value="" placeholder="Digite seu nome">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="email"> <h3>Email:</h3> </label>
                                            <input type="text" id="email" name="email" value="" placeholder="Digite seu email">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="telefone"> <h3>Telefone:</h3> </label>
                                            <input type="text" id="telefone" name="telefone" value=""  placeholder="Digite seu telefone">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="rua"> <h3>Rua:</h3> </label>
                                            <input type="text" id="rua" name="rua" value=""  placeholder="Digite sua rua">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="numero"> <h3>Número:</h3> </label>
                                            <input type="text" id="numero" name="numero" value=""  placeholder="Digite seu número">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="bairro"> <h3>Bairro:</h3> </label>
                                            <input type="text" id="bairro" name="bairro" value=""  placeholder="Digite seu bairro">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="cidade"> <h3>Cidade:</h3> </label>
                                            <input type="text" id="cidade" name="cidade" value=""  placeholder="Digite sua cidade">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="cep"> <h3>CEP:</h3> </label>
                                            <input type="text" id="cep" name="cep" value=""  placeholder="Digite seu cep">
                                        </div>
        
                                        <div class="cep1">
                                            <label for="estado"> <h3>Estado:</h3> </label>
                                            <input type="text" id="estado" name="estado" value=""  placeholder="Selecione seu Estado">
                                        </div>
        
                                        <button type="submit" name="botao-busca1" class="botao-busca">Enviar</button>
                                    </form>
        


                            </form>

                        </div>

                    </div>

                </section>

            </div>
            <div id="borderSobre"></div>
        </section>
    </main>
@endsection
