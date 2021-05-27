<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>G'Mola Adventure</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/index.css">
    </head>

    <body>
        <nav class="navbar navbar-light barra-de-nav">
            <div class="container-fluid">
                <div class="navbar-brand"> <span class="titulo">G'Mola Adventure</span> </div>
                <?php
                    session_start();

                  if(isset($_SESSION["usuario-id"])){
                    echo "<div>";
                    echo "<a href='./pagina-inicial.php' type='button' class='btn btn-lg btn-outline-light botao-sair'>";
                    echo "PÁGINA INICIAL";
                    echo "</a> &nbsp;";
                  }
                  else{
                    echo "<a href='./login.php' type='button' class='btn btn-lg btn-outline-light botao-sair'>";
                    echo "PÁGINA DO JOGADOR";
                    echo "<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-door-open-fill' viewBox='0 0 16 16'>";
                    echo "<path d='M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z'/>";
                    echo "</svg>";
                    echo "</a>";
                  }
                ?>
            </div>
        </nav>

        <div id="galeria-fotos" class="carousel slide galeria" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#galeria-fotos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#galeria-fotos" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#galeria-fotos" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner galeria-img">
                <div class="carousel-item active">
                    <img src="../imagens/galeria/img1.png" height="500" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>UM HERÓI</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../imagens/galeria/img2.png" height="500" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>DIVERSOS INIMIGOS</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../imagens/galeria/img3.png" height="500" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>CENÁRIOS DESAFIADORES</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galeria-fotos" data-bs-slide="prev">
                <span class="galeria-ctrl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
                    </svg>
                    <span>ANTERIOR</span>
                </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galeria-fotos" data-bs-slide="next">
                <span class="galeria-ctrl">
                    <span>PRÓXIMO</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
                    </svg>
                </span>
            </button>
        </div><br/><br/>

        <div class="container">
            <h1>A História</h1>

            <div class="historia-1">
                <div class="historia-texto">
                    Nosso personagem foi aprisionado no submundo de GMola, um lugar feito em camadas e cheio de inimigos hostis.
                    Para se libertar desse lugar ele deve derrotar a morte, rainha do submundo e responsável por aprisioná-lo. Porém, para chegar até essa batalha, nosso personagem deve superar os inimigos e atravessar todas as camadas desse submundo sombrio.<br/>
                    <a href="./pagina-ranking.php">Entre nessa luta</a> e vença os inimigos para libertar nosso personagem nessa aventura.
                </div>
                <div class="img">
                    <img src="../imagens/../imagens/index_img_2.png" width="400" height="300">
                </div>
            </div>

            <div class="historia-2">
                <div class="img">
                    <img src="../imagens/index_img_1.png" width="400" height="300">
                </div>
                <div class="historia-texto">
                    <h3>Como funciona</h3>
                    Você assume o comando do nosso personagem e entra em uma batalha épica, enfrentando os inimigos dentro dos diversos cenários. Ao final de cada cenário, você terá que enfrentar e matar o boss para passar para a próxima fase.<br/>
                    Cada inimigo que você matar e cada coração que pegar dentro do cenário conta como pontuação que, somada com o tempo, resulta na pontuação final que ficara no 
                    <a href="./pagina-ranking.php">ranking dos heróis</a>.<br/>
                    <strong>Quanto melhor for sua pontuação, mais avançado no ranking você estará!</strong>
                </div>
            </div>
        </div><br/><br/>
        <div class="rodape navbar-fixed-bottom">
            <div class="rodape-dados-devs">
                <span>Desenvolvido por: <a data-bs-toggle="modal" href="#devs-modal">Alunos da Uninove&reg;</a></span>
            </div><br/>

            <div class="rodape-copyright">
                <strong>G'Mola Adventure</strong> · <?php echo date("Y") ?> &copy; Todos os direitos reservados.
            </div>
        </div>


        <!-- NOME DEVS -->
        <div class="modal fade" id="devs-modal" tabindex="-1" aria-labelledby="devs-modal-titulo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="devs-modal-titulo"><strong>Desenvolvedores</strong></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-devs">
                    <div class="row">
                        <strong>JOGO</strong>
                            - Thiago da Cruz Lino<br/>
                            - Raphael Lins dos Santos<br/>
                            - Welison Pereira Araújo<br/>
                            - Gustavo Henrique Barcellos Jaques
                    </div><br/>

                    <div class="row">
                        <strong>SITE E SERVIÇOS</strong>
                            - Luis Gustavo Gonçalves Reimberg<br/>
                            - Daniel dos Santos Pierre<br/>
                            - James Lima Moreira Da Cruz
                    </div><br/>

                    <div class="row">
                        <strong>DOCUMENTAÇÃO</strong>
                            - Kethylen Raissa Leal da Silva<br/>
                            - Matheus Ferreira Da Silva<br/>
                            - Estevão Souza Dos Santos
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>