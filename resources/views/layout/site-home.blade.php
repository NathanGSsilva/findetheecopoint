<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find The EcoPoint</title>
    <link rel="stylesheet" href="css/main.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    
        @if (@session('sucesso'))

        <div class="mensagem-sucesso">
        
            {{session('sucesso')}}
        
        </div>

        @endif
        
        @if (@session('error'))
        
        <div class="mensagem-sucesso">
        
            {{session('error')}}
        
        </div>

        @endif

    </div>

    <div id="cabecalho">
        <nav id="menu">
            <ul>
                <li><a href="{{ asset('seja-um-parceiro') }}">Seja um parceiro</a></li>
                <li><a href="{{ asset('educativo') }}">Educativo</a></li>
                <li><a href="{{ asset('categoria') }}">Categorias</a></li>
                <a href="{{ asset('') }}" class="imghome"><img src="img/foto-logo.svg" alt="logo-empresa"
                        class="imghome"></a>
                <li><a href="{{ asset('sobre-nos') }}">Sobre nos</a></li>
                <li><a href="{{ asset('cadastro') }}">Cadastro</a></li>
                <li><a href="{{ route('login.form') }}">Login</a></li>
            </ul>
        </nav>
    </div>

    @yield('conteudo')

    <footer id="rodape">
        <div class="container" id="linhaRodape">
            <div>
                <h3>FIND THE ECOPOINT</h3>
                <nav class="rodape1">
                    <ul>
                        <a href="sobre-nos.html">
                            <li>Sobre nos</li>
                        </a>
                        <a href="educativo.html">
                            <li>Educativo</li>
                        </a>
                        <a href="politicas.html">
                            <li>Políticas</li>
                        </a>
                        <a href="seja-um-parceiro.html">
                            <li>Seja um parceiro</li>
                        </a>
                        <a href="#">
                            <li>Termos de Uso</li>
                        </a>
                    </ul>
                </nav>
            </div>
            <div>
                <h3>CONTATO</h3>
                <nav>
                    <ul>
                        <div class="contatoFlex">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="#">
                                <li>findtheecopoint@gmail.com</li>
                            </a>
                        </div>
                        <div class="contatoFlex">
                            <i class="fa-solid fa-phone"></i>
                            <a href="#">
                                <li>(14)99999-9999</li>
                            </a>
                        </div>
                        <div class="contatoFlex">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="#">
                                <li>Av. Santo Antonio, 459</li>
                            </a>
                        </div>
                    </ul>
                </nav>
            </div>
            <div>
                <h3>REDES SOCIAIS</h3>
                <div class="icones">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                </div>
                <a href="index copy.html"><img src="img/foto-logo.svg" alt=""></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
