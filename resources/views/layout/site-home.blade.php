<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find The EcoPoint</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header id="banner">
        <div class="container">
            <div id="cabecalho">
                <nav id="menu">
                <ul>
                        <li>
                        <li><a href="{{ asset('seja-um-parceiro') }}">Seja um parceiro</a></li>
                        <li><a href="{{ asset('educativo') }}">Educativo</a></li>
                        <li><a href="{{ asset('categoria') }}">Categorias</a></li>
                        <a href="{{ asset('') }}" class="imghome"><img src="img/foto-logo.svg" alt="logo-empresa" class="imghome"></a>
                        <li><a href="{{ asset('sobre-nos') }}">Sobre nos</a></li>
                        <li><a href="{{ asset('cadastro') }}">Cadastro</a></li>
                        <li><a href="{{ asset('cadastro') }}">Login</a></li>
                    </ul>
                </nav>
            </div>
            <div id="textoBack">
                <div class="texto1">
                    <p>“DESCUBRA ONDE FICAM<br>
                        TODOS OS PONTOS DE<br>
                        DESCARTE PRÓXIMOS<br>
                        A VOCÊ!”</p>
                </div>
                <div class="texto2">
                    <p>Aqui você encontra o lugar certo<br>
                        para reciclar seu lixo e<br>
                        colaborar com nosso mundo.</p>
                </div>
            </div>
        </div>
    </header>


    @yield("conteudo")

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
    <script src="js/main.js"></script>
</body>

</html>