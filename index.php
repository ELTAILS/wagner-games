<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wagner games | Bem vindo!</title>
    <link rel="shortcut icon" href="img/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <!--Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--cabeçalho-->
    <div class="top">
        <header id="cabecalho">
                <div class="logoimg">
                    <a href="index"><img src="img/logo.png" alt="logo"></a>
                </div>
                <!--COLOCAR UM IPUT DE PESQUISA-->
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Buscar jogos..." onkeyup="filtrar()">
                    <ul id="lista">
                        <li><a href="#"><i class="fa-solid fa-trophy"></i>Indie</a></li>
                        <li><a href="#"><i class="fa-solid fa-fire"></i>Ação</a></li>
                        <li><a href="#"><i class="fa-solid fa-binoculars"></i>Aventura</a></li>
                        <li><a href="#"><i class="fa-solid fa-car"></i>Corrida</a></li>
                        <li><a href="#"><i class="fa-solid fa-bowling-ball"></i>Esportes</a></li>
                        <li><a href="#"><i class="fa-solid fa-gun"></i>FPS</a></li>
                        <li><a href="#"><i class="fa-solid fa-puzzle-piece"></i>Simulação</a></li>
                    </ul>
                    <p id="mensagem" style="display:none; color:red;">Nada encontrado!</p>
                </div>
                <div class="nav-cabecalho">
                    <nav id="menu-cabecalho">
                        <ul id="ul-cabecalho">
                            <li id="li-cabecalho"><a href="index"><i class="fa-solid fa-house"></i>Home</a></li>
                            <li id="li-cabecalho"><a href="#"><i class="fa-solid fa-cart-shopping"></i>Carrinho</a></li>
                            <li id="li-cabecalho"><a href="#"><i class="fa-solid fa-comment"></i>Meu contato</a></li>
                            <li id="li-cabecalho"><a href="#"><i class="fa-solid fa-user"></i>Conta</a></li>
                        </ul>
                    </nav>
                </div>
        </header> <hr>
        <!--MENU-->
        <nav id="menu">
            <ul id="ul-menu">
                <li><a href="php/pc/pc"><i class="fa-solid fa-desktop"></i>PC</a></li>
                <li><a href="#"><i class="fa-brands fa-playstation"></i>Playstation</a></li>
                <li><a href="#"><i class="fa-brands fa-xbox"></i>Xbox</a></li>
                <li><a href="#"><i class="fa-solid fa-laptop"></i>Nintendo</a></li>
                <li><a href="#"><i class="fa-solid fa-gamepad"></i>Games</a></li>
                <li><a href="#"><i class="fa-solid fa-book-bookmark"></i>Animes</a></li>
                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>Colecionador</a></li>
                <li><a href="#"><i class="fa-solid fa-newspaper"></i>Novidades</a></li>
            </ul>
        </nav>
    </div>
    <!--CONTÈUDO-->
    <menu>
        <!--LAMÇAMENTOS HOME-->
        <?php include_once 'php/games.php' ?>
        <div id="games_home">
            <table>
                <tr>
                    <th></th>
                    <th class="th-home"><h2>Nossos lançamentos!</h2></th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <div class="lancamentos-home">
                            <img src="img/games/indie/Stardew-Valley.jpg" alt="Stardew-Valley">
                            <h3><?=$jogos_indie[0]['nome']?></h3>
                            <p><?=$jogos_indie[0]['descricao']?></p>
                            <button id="btn_home"><i class="fa-solid fa-cart-shopping"></i> Comprar </button>
                        </div>                        
                    </td>
                    <td>
                        <div class="lancamentos-home">
                            <img src="img/games/indie/undertale.jpg" alt="undertale">
                            <h3><?=$jogos_indie[1]['nome']?></h3>
                            <p><?=$jogos_indie[1]['descricao']?></p>
                            <button id="btn_home"><i class="fa-solid fa-cart-shopping"></i> Comprar </button>
                        </div>    
                    </td>
                    <td>
                        <div class="lancamentos-home">
                            <img src="img/games/indie/hollow-knight.jpg" alt="hollow-knight">
                            <h3><?=$jogos_indie[2]['nome']?></h3>
                            <p><?=$jogos_indie[2]['descricao']?></p>
                            <button id="btn_home"><i class="fa-solid fa-cart-shopping"></i> Comprar </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!--HISTORIA-->
        <div class="wagner-games">
            <div class="historia">
                <?php
                    $arquivo = 'doc/historia.txt';
                    $historia = file_get_contents($arquivo);
                    echo $historia;
                ?>
            </div>
            <div class="direitos-da-empresa">
                <?php 
                    $arquivo = 'doc/direitos.txt';
                    $direitos_da_empresa = file_get_contents($arquivo);
                    echo $direitos_da_empresa;
                ?>
            </div>
        </div>
    </menu>
    <!--ANUNCIO-->
    <a href="#" id="anuncio">
        <aside id="anuncio">
            <img src="img/anuncio/raposa-dos-livros.png" alt="raposa-dos-livros" id="anuncio-img">
            <button id="fechar-anuncio"><i class="fa-solid fa-x"></i></button>
        </aside>
    </a>
    <!--Pagamento-->
        <div class="pagamento_pai">

            <div class="pagamento">
                <img src="img/logo.png" alt="logo" class="logo_pagamento">
            </div>

            <div class="pagamento">
                <img src="img/pagamentos/Formasdepagamento-removebg-preview.png" alt="Formasdepagamento" class="formas_de_pagamento">                
            </div>

            <div class="pagamento">
                <p>Aceitamos diversas formas de pagamento para sua maior comodidade. Você pode escolher entre cartões de crédito e débito das principais bandeiras, boleto bancário e transferências via PIX. Todas as transações são processadas de forma segura, garantindo praticidade e proteção dos seus dados.</p>
            </div>

        </div>  <hr>
    <!--Script-->
    <script defer src="js/pesquisa_home.js"></script>
    <script defer src="js/fechar-anuncio.js"></script>
    <!--RODAPÈ-->
    <footer>
        <?php include_once 'php/rodape.php' ?>
    </footer>

</body>
</html>