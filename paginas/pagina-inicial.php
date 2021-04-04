<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <?php
          session_start();

          if((!isset ($_SESSION['usuario']) == true))
          {
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
                    <a href="http://localhost/prj-integrador-jogo-site/paginas/pagina-perfil.php" type="button" class="btn btn-outline-light botao-home" data-bs-toggle="tooltip" data-bs-placement="right" title="MEU PERFIL">
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
        <br/>


        <div class="container jogo-area">
            <div class="row">
                <div class="col-12">
                    <div class="espaço-jogo"></div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2">
                    <!-- <button type="button" class="btn btn-outline-light botao-ranking" data-bs-toggle="modal" href="modal-ranking">RANKING</button> -->
                    <a class="btn btn-outline-light botao-ranking" data-bs-toggle="modal" href="#modal" role="button">RANKING</a>
                </div>
            </div> 
        </div>


        <!-- First modal dialog -->
        <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="ranking-titulo" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="ranking-titulo">TOP 5</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">POSIÇÃO</th>
                                <th scope="col">USUÁRIO</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Mark</td>
                              </tr>
                            </tbody>
                        </table>
                        <div class="row sua-posicao">
                            <span><strong>SUA POSIÇÃO: </strong>1°</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">FECHAR</button>
                        <button class="btn btn-outline-dark" data-bs-target="#modal2" data-bs-toggle="modal" data-bs-dismiss="modal">Ranking Completo</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second modal dialog -->
        <div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ranking-titulo">RANKING COMPLETO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body barra-de-rolagem">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">POSIÇÃO</th>
                                <th scope="col">USUÁRIO</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">10</th>
                                <td>Mark</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">FECHAR</button>
                        <button class="btn btn-outline-dark" data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">TOP 5</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-sair" tabindex="-1" aria-labelledby="modal-sair-titulo" aria-hidden="true">
            <form action="http://localhost/prj-integrador-jogo-site/paginas/php/sair-ctrl.php" method="GET">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-sair-titulo">Deseja mesmo sair?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-danger">Sair</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>