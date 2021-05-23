<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Meu Perfil</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <?php
            require './modulos/logout.php';

            session_start();
            
            if(!isset($_SESSION["usuario-id"])){
                unset($_SESSION["usuario-id"]);
                unset($_SESSION['usuario']);
                header('location:login.php');
            }

            if(!isset($_SESSION["usuario"])){
                header('location: ./php/perfil-ctrl.php');
            }

            $nome = $_SESSION["usuario"]->UsuarioNome;
            $sobrenome = $_SESSION['usuario']->UsuarioSobreNome;
            $email = $_SESSION['usuario']->UsuarioEmail;
            $apelido = $_SESSION['usuario']->UsuarioApelido;
            $senha = $_SESSION['usuario']->UsuarioSenha;
            $pontos = $_SESSION['usuario']->UsuarioPontuacao;

        ?>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/perfil.css">
    </head>

    <body>

        <nav class="navbar navbar-light barra-de-nav">
            <div class="container-fluid">
                <div class="navbar-brand" href="#">
                    <a href="./pagina-inicial.php" type="button" class="btn btn-outline-light botao-home" data-bs-toggle="tooltip" data-bs-placement="right" title="PÁGINA INICIAL">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
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

        <div class="container">
            <div class="row">
                <div class="col-3 coluna-usuario">
                    <div class="row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div><br/>
                    <div class="row nome-usuario">
                        <span>
                            <?php echo $apelido ?>
                        </span>
                    </div>
                    <div class="row info-classificacao">
                        <span>
                            <strong>Pontos:</strong> <?php echo $pontos ?>
                        </span>
                    </div>
                </div>
                <div class="col-9 coluna-info">
                    <div class="row">
                        <h2>Informações da conta:</h2>
                    </div><br/>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="campo-nome" disabled
                                value=<?php echo $nome ?>>
                                <label for="campo-nome">NOME</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="campo-sobrenome" disabled
                                value=<?php echo $sobrenome ?>>
                                <label for="campo-sobrenome">SOBRENOME</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="campo-email" disabled
                                value=<?php echo $email ?>>
                                <label for="campo-email">EMAIL</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="campo-apelido" disabled
                                value=<?php echo $apelido ?>>
                                <label for="campo-apelido">APELIDO</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="campo-senha" disabled
                                value=<?php echo $_SESSION['usuario']->UsuarioSenha ?>>
                                <label for="campo-apelido">SENHA</label>
                            </div>
                        </div>
                        <div class="col">
                            <input type="checkbox" onclick="mostrarSenha()" class="btn-check" id="check-mostrar-senha" autocomplete="off">
                            <label class="btn btn-outline-light check-senha" for="check-mostrar-senha">Mostrar Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn-editar btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#modal-mudar-senha">
                                    Trocar Senha
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn-editar btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#modal-atualizacao">
                                    Editar Informações
                                </button>
                            </div>
                        </div>
                    </div>

                    <?php

                        if(isset($_SESSION["erro-atualizacao"])){
                            echo "<br/>";
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo $_SESSION["erro-atualizacao"];
                            echo "</div>";
                        }
                        if(isset($_SESSION["sucesso-atualizacao"])){
                            echo "<br/>";
                            echo "<div class='alert alert-success' role='alert'>";
                            echo $_SESSION["sucesso-atualizacao"];
                            echo "</div>";
                        }
                    
                    ?>

                    <script>
                        function mostrarSenha() {
                            var x = document.getElementById('campo-senha');
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>

                </div>
            </div>
        </div><br/><br/><br/>
        <div class="rodape navbar-fixed-bottom">
            <div class="rodape-dados">

                <div class="rodape-dados-links">
                    <div class="row">
                        <div class="col">
                            <a href="">Página Inicial</a><br/>
                            Requisitos mínimos<br/>
                            Download do jogo<br/>
                        </div>
                        <div class="col">
                            <a href="">Minha Conta</a><br/>
                            Edição de dados<br/>
                            Substituição de senha<br/>
                        </div>
                        <div class="col">
                            <a href="">Ranking</a><br/>
                            Top 5 jogadores<br/>
                            Ranking completo<br/>
                        </div>
                    </div>
                </div>

                <div class="rodape-dados-devs">
                    <span>Desenvolvido por: <a data-bs-toggle="modal" href="#devs-modal">Alunos da Uninove&reg;</a></span>
                </div>

            </div>

            <div class="rodape-copyright">
                <strong>G'Mola Adventure</strong> · <?php echo date("Y") ?> &copy; Todos os direitos reservados.
            </div>
        </div>

        <div class="modal fade" id="modal-atualizacao" tabindex="-1" aria-labelledby="modal-atualizacao-titulo" aria-hidden="true">
            <form action="./php/perfil-ctrl.php" method="POST">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-atualizacao-titulo">Editar Dados</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="campo-nome" required 
                                    name = "atualizacao-nome"
                                    value=<?php echo $nome ?>>
                                    <label for="campo-nome">NOME*</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="campo-sobrenome"
                                    name = "atualizacao-sobrenome"
                                    value=<?php echo $sobrenome ?>>
                                    <label for="campo-sobrenome">SOBRENOME</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="campo-email" required
                                    name = "atualizacao-email"
                                    value=<?php echo $email ?>>
                                    <label for="campo-email">EMAIL*</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="campo-apelido" required
                                    name = "atualizacao-apelido"
                                    value=<?php echo $apelido ?>>
                                    <label for="campo-apelido">APELIDO*</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-success">Atualizar</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal fade" id="modal-mudar-senha" tabindex="-1" aria-labelledby="modal-mudar-senha-titulo" aria-hidden="true">
            <form action="./php/senha-ctrl.php" method="POST">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-mudar-senha-titulo">Trocar Senha</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="campo-senha" required
                                    name = "atualizacao-senha-atual">
                                    <label for="campo-senha">SENHA ATUAL*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="campo-senha" required
                                    name = "atualizacao-senha-nova" minlength="5">
                                    <label for="campo-senha">NOVA SENHA*</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="campo-senha" required
                                    name = "atualizacao-senha-conf-nova">
                                    <label for="campo-senha">CONFIRMAÇÃO NOVA SENHA*</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-success">Atualizar</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>

        <?php
            if(isset($_SESSION["erro-atualizacao"])){
                unset($_SESSION["erro-atualizacao"]);
            }
            if(isset($_SESSION["sucesso-atualizacao"])){
                unset($_SESSION["sucesso-atualizacao"]);
            }
        ?>

    </body>

</html>