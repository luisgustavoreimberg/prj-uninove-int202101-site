<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <?php
            require './modulos/logout.php';

            session_start();

            if(!isset($_SESSION["usuario-id"])){
                unset($_SESSION["usuario-id"]);
                unset($_SESSION['usuario']);
                header('location:login.php');
            }
        ?>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/pagina-inicial.css">
    </head>

    <body>

        <nav class="navbar navbar-light barra-de-nav">
            <div class="container-fluid">
                <div class="navbar-brand" href="#">
                    <a href="./pagina-perfil.php" type="button" class="btn btn-outline-light botao-home" data-bs-toggle="tooltip" data-bs-placement="right" title="MEU PERFIL">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                </div>

                <button type="button" class="btn btn-lg btn-outline-light botao-sair" data-bs-toggle="modal" data-bs-target="#modal-sair">
                    SAIR
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                </button>
            </div>
        </nav>

        <div class="container jogo-area">
            <div class="row">
                <div class="col-12 jogo-desc">
                    <h1>Seja bem vindo ao mundo G'Mola</h1>
                    <p>
                        Aqui você enfrentará diversas aventuras e inimigos desafiadores.<br/>
                        Clique no botão abaixo e se junte a nossa aventura:
                        <div class="requisitos-jogo">
                            <div class="row">
                                <a class="btn btn-requisitos" data-bs-toggle="collapse" href="#requisitos-minimos" role="button" aria-expanded="false" aria-controls="requisitos-minimos">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                    Requisitos mínimos:
                                </a>
                                <div class="collapse" id="requisitos-minimos">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col">
                                                <img src="http://cdn.onlinewebfonts.com/svg/img_248263.png" width="30" height="30">
                                                Windows 7
                                            </div>
                                            <div class="col">
                                                <img src="https://svgsilh.com/svg/152655.svg" width="30" height="30">
                                                2GB de RAM
                                            </div>
                                            <div class="col">
                                                <img src="https://image.flaticon.com/icons/png/512/64/64481.png" width="30" height="30">
                                                25GB livre em disco
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br/>

                        <div class="d-grid gap-2">
                            <div class="efeito-baixar">
                                <a class="btn btn-outline-light btn-baixar" role="button"
                                    href="../download/teste.bat" download="gmola_adventure"
                                    data-front="BAIXAR JOGO" data-back="ENTRAR NA AVENTURA">
                                    BAIXAR JOGO
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </p>
                    <p>
                        Veja o ranking dos heróis.<br/>
                        E, se você tiver honra, fará parte deste ranking.
                        <div class="d-grid gap-2">
                            <a href="./pagina-ranking.php" class="btn btn-outline-light botao-ranking" role="button">RANKING</a>
                        </div>
                    </p>
                </div>
            </div>
        </div>

    </body>
</html>