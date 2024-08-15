@extends("layout.site-home")

@section("conteudo")

<main>
    <section id="fundo-principal-2">
        <div class="container">
            <h2 class="space-title">Descubra os pontos de descarte próximos a você!</h2>
            <div id="menuBusca">
                <div id="imgBusca">
                    <img src="img/foto-logo-branca.svg" alt="logo-empresa" width="120">
                </div>
                <form action="#" method="get" id="barraBusca">
                    <div class="cep">
                        <h3>O que você precisa descartar?</h3>
                        <input type="text" placeholder="Digite um objeto...">
                    </div>
                    <div class="cep">
                        <h3>Onde você quer descartar?</h3>
                        <input type="text" placeholder="Digite seu cep...">
                    </div>
                    <button type="submit" name="botao-busca" class="botao-busca">buscar <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                </form>
            </div>
        </div>
    </section>

    <section id="fundo-principal-1">
        <div class="container">
            <h2 class="space-title-2">Pontos de descarte comuns da sua cidade!</h2>
            
            <div id="teste12">

                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236395.6761934356!2d-50.25167360546877!3d-22.2141715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd7309baef6d9%3A0x2d5ecbe8edc7dc7c!2sSenac%20Marilia!5e0!3m2!1spt-BR!2sbr!4v1701218961428!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <nav id="legenda-mapa">
                        <ul>
                            <li>
                                <div class="red"><i class="fa-solid fa-map-pin"></i> - Empresas parceiras</div>
                            </li>
                            <li>
                                <div class="blue"><i class="fa-solid fa-map-pin"></i> - Empresas publicas</div>
                            </li>
                            <li>
                                <div class="black"><i class="fa-solid fa-map-pin"></i> - Empresas particulares</div>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236395.6761934356!2d-50.25167360546877!3d-22.2141715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd7309baef6d9%3A0x2d5ecbe8edc7dc7c!2sSenac%20Marilia!5e0!3m2!1spt-BR!2sbr!4v1701218961428!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <nav id="legenda-mapa">
                        <ul>
                            <li>
                                <div class="red"><i class="fa-solid fa-map-pin"></i> - Empresas parceiras</div>
                            </li>
                            <li>
                                <div class="blue"><i class="fa-solid fa-map-pin"></i> - Empresas publicas</div>
                            </li>
                            <li>
                                <div class="black"><i class="fa-solid fa-map-pin"></i> - Empresas particulares</div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="fundo-principal-3">
        <div class="container">
            <h2 class="space-title">NOSSOS PARCEIROS!</h2>
            <div id="parceiros">
                <img src="img/parceiros-logo/global-solucoes.png" alt="">
                <img src="img/parceiros-logo/mult-uvr.png" alt="">
                <img src="img/parceiros-logo/nature-residuos.png" alt="">
                <img src="img/parceiros-logo/trata-entulho.png" alt="">
                <img src="img/parceiros-logo/vm-coleta.png" alt="">
            </div>
            <div class="bolinha">
                <p>.</p>
                <p>.</p>
                <p>.</p>
            </div>
        </div>
    </section>
</main>

@endsection