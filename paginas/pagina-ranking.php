<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ranking</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <?php
            require './modulos/logout.php';

            session_start();

            if((!isset($_SESSION["ranking"]) == true)){
                unset($_SESSION["ranking"]);
                header('location:php/ranking-ctrl.php');
            }
        ?>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/ranking.css">
    </head>

    <body>
        <nav class="navbar navbar-light barra-de-nav">
            <div class="container-fluid">
                <div class="navbar-brand"> <span class="titulo">G'Mola Adventure</span> </div>

                <?php
                  if(isset($_SESSION["usuario-id"])){
                    echo "<div>";
                    echo "<a href='./pagina-inicial.php' type='button' class='btn btn-lg btn-outline-light botao-sair'>";
                    echo "PÁGINA INICIAL";
                    echo "</a> &nbsp;";

                    echo "<button type='button' class='btn btn-lg btn-outline-light botao-sair' data-bs-toggle='modal' data-bs-target='#modal-sair'>";
                    echo "SAIR";
                    echo "<svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-box-arrow-left' viewBox='0 0 16 16'>";
                    echo "<path fill-rule='evenodd' d='M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z'/>";
                    echo "<path fill-rule='evenodd' d='M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z'/>";
                    echo "</svg>";
                    echo "</button>";
                    echo "</div>";
                  }
                  else{
                    echo "<a href='./login.php' type='button' class='btn btn-lg btn-outline-light botao-sair'>";
                    echo "LOGIN";
                    echo "<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-door-open-fill' viewBox='0 0 16 16'>";
                    echo "<path d='M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z'/>";
                    echo "</svg>";
                    echo "</a>";
                  }
                ?>
            </div>
        </nav>
        <br/>


        <div class="container ranking-area">
            <div class="row">
                <h1 class="ranking-titulo">ESPAÇO DOS HERÓIS</h1>
            </div><br/>

            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="ranking-tab-titulo nav-link active" id="nav-top5-tab" data-bs-toggle="tab" data-bs-target="#nav-top5" type="button" role="tab" aria-controls="nav-home" aria-selected="true">TOP 5</button>
                        <button class="ranking-tab-titulo nav-link" id="nav-completo-tab" data-bs-toggle="tab" data-bs-target="#nav-completo" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">RANKING COMPLETO</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-top5" role="tabpanel" aria-labelledby="nav-top5-tab">
                    <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">POSIÇÃO</th>
                                <th scope="col">USUÁRIO</th>
                                <th scope="col">PONTOS</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php
                                if(isset($_SESSION["ranking"])==false){
                                  echo "<tr>";
                                  echo "<th scope='row'>-</th>";
                                  echo "<td>SEM DADOS DE RANKING</td>";
                                  echo "<td>-</th>";
                                  echo "</tr>";
                                }
                                else{
                                  for($i=0; $i<5; $i++){
                                    if(empty($_SESSION["ranking"][$i]))
                                    {
                                      break;
                                    }
                                    echo"<tr>";
                                    echo"<th scope='row'>".($i+1)."</th>";
                                    echo"<td>".$_SESSION["ranking"][$i]->UsuarioApelido."</td>";
                                    echo "<td>".$_SESSION["ranking"][$i]->UsuarioPontuacao."</th>";
                                    echo"</tr>";
                                  }
                                }
                              ?>
                            </tbody>
                        </table>

                        <?php
                        
                        if(isset($_SESSION["usuario-id"])){
                            echo "<div class='row sua-posicao'>";
                            echo "<span><strong>SUA POSIÇÃO: ".(array_search($_SESSION["usuario-id"], $_SESSION["ranking"])+1)."° </strong></span>";
                            echo "</div>";
                        }
                        
                        ?>
                    </div>

                    <div class="tab-pane fade barra-de-rolagem" id="nav-completo" role="tabpanel" aria-labelledby="nav-completo-tab">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">POSIÇÃO</th>
                                <th scope="col">USUÁRIO</th>
                                <th scope="col">PONTOS</th>
                              </tr>
                            </thead>

                            <tbody>
                            <?php
                                if(isset($_SESSION["ranking"])==false){
                                    echo "<tr>";
                                    echo "<th scope='row'>-</th>";
                                    echo "<td>SEM DADOS DE RANKING</td>";
                                    echo "<td>-</th>";
                                    echo "</tr>";
                                }
                                else{
                                    $i = 1;  
                                    foreach($_SESSION["ranking"] as $ranking){
                                        echo"<tr>";
                                        echo"<th scope='row'>".$i."</th>";
                                        echo"<td>".(empty($ranking->UsuarioApelido)? $ranking->UsuarioEmail : $ranking->UsuarioApelido)."</td>";
                                        echo "<td>".$ranking->UsuarioPontuacao."</th>";
                                        echo"</tr>";
                                        $i++;
                                    }
                                }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php
           unset($_SESSION["ranking"]);
        ?>

    </body>
</html>