@extends('layout.site-home')
  
@section("conteudo")

    <main>
        <section>
            <div id="banner5"></div>
            <div id="branco">
                <div class="container">
                    <h3 class="categoria1">CATEGORIAS DO LIXO</h3>
                    <h4 class="categoria2">Quais os tipos de lixo existentes?</h4>
                    <p class="categoria3">É chamado de lixo todo material que já não possui mais utilidade e, por isso,
                        é descartado. É
                        possível classificar o lixo de acordo com sua composição e destino, facilitando a coleta
                        seletiva e auxiliando na conservação do meio ambiente e preservação da saúde de todos.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div id="arrumatop">
                    <div class="categoriaTxt">
                        <div class="fundoTxt">
                            <h4>Lixo orgânico</h4>
                            <p>Descartado principalmente em residências e estabelecimentos comerciais, o lixo orgânico é
                                composto basicamente por restos de alimento. Este tipo de lixo deve ser separado dos
                                demais,
                                pois costuma ser destinado a aterros sanitários.</p>
                            <h4>Lixo comercial</h4>
                            <p>É o lixo descartado em estabelecimentos comerciais, como lojas, restaurantes e bancos. É
                                formado principalmente por embalagens, plásticos, restos de alimentos e caixas de
                                papelão.</p>
                            <h4>Lixo industrial</h4>
                            <p>Resíduos originados em indústrias, normalmente compostos de sobras de matérias-primas.
                                Este
                                lixo pode ser encaminhado à reciclagem ou reutilizado pelas próprias indústrias.
                                Exemplos:
                                sobras de metal, vidro, tecidos, plásticos, borrachas.</p>
                            <h4>Lixo reciclável</h4>
                            <p>É o lixo que pode ser transformado em outros materiais. Deve ser separado e enviado à
                                coleta
                                seletiva para que chegue às cooperativas de reciclagem. Entre os exemplos estão
                                embalagens
                                plásticas, papelão, embalagens de vidro, garrafas PET, objetos de metal e papéis de
                                jornal e
                                revista.</p>
                            <h4>Lixo hospitalar</h4>
                            <p>Este tipo de lixo deve ser encaminhado a empresas especializadas, pois pode ser perigoso
                                para a saúde de quem entrar em contato com ele. Seringas, medicamentos, fraldas, sondas
                                e materiais cirúrgicos são exemplos de lixo hospitalar.</p>
                            <h4>Lixo verde</h4>
                            <p>Resultado da poda de árvores ou do recolhimento de folhas nas ruas. Por ser orgânico,
                                pode ser utilizado para compostagem.</p>
                            <h4>Lixo doméstico</h4>
                            <p>Também chamado de lixo domiciliar, refere-se ao material gerado em residências e inclui
                                resíduos orgânicos e embalagens, entre outros.</p>
                            <h4>Lixo eletrônico</h4>
                            <p>Um dos grandes desafios atuais é o destino do lixo eletrônico, que contém metais como
                                ouro, cobre, alumínio e outros materiais. É gerado pelo descarte de eletrônicos que
                                entraram em desuso. Entre os exemplos estão TVs, rádios, computadores e telefones.</p>
                            <h4>Lixo radioativo</h4>
                            <p id="paraArru">Extremamente perigoso, este lixo é composto por material radioativo, como sobras de
                                urânio de usinas nucleares e elementos que compõem aparelhos de raios-X. Deve ser
                                tratado por empresas especializadas.</p>
                        </div>
                        <div id="imgcategoria">
                            <img src="img/categorias/2.png" alt="">
                            <img src="img/categorias/1.png" alt="">
                            <img src="img/categorias/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection