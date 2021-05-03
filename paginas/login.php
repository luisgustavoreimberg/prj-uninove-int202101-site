<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/login.css">
    </head>

    <body>
        <?php 
            session_start();
        ?>

        <div class="grupo-formulario-login">
            <div class="titulo-jogo">G'Mola Adventure</div>

            <div class="formulario-login">
                <h2><strong>Diga quem você é, e entre em sua aventura!</strong></h2><br/>

                <!--#### LOGIN ####-->
                <form action="http://localhost/prj-integrador-jogo-site/paginas/php/login-ctrl.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control <?php echo (isset($_SESSION["erro-login"])?"is-invalid":""); ?>"
                        id="campo_usuario" placeholder="..."
                        name="login-usuario" required/>
                        <label class="campo_titulo" for="campo_usuario">USUÁRIO OU EMAIL</label>
                    </div>

                    <div class="campo-senha <?php echo (isset($_SESSION["erro-login"])?"is-invalid":""); ?>">
                        <div class="form-floating">
                            <input type="password" class="form-control campo-senha-input <?php echo (isset($_SESSION["erro-login"])?"is-invalid":""); ?>" 
                            id="campo_senha" placeholder="..." aria-describedby="esqueci-senha"
                            name="login-senha" required>
                            <label class="campo_titulo" for="campo_senha">SENHA</label>
                        </div>
                        <button type="button" id="esqueci-senha" class="btn btn-outline-light botao-esqueci-senha" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueci minha senha</button>
                    </div><?php echo (isset($_SESSION["erro-login"])?"":"<br/>"); ?>

                    <?php
                        if(isset($_SESSION["sucesso-conta"])){
                            echo "<div class='alert alert-success' role='alert'>";
                            echo "CONTA CRIADA COM SUCESSO!";
                            echo "</div>";
                        }
                        if(isset($_SESSION["erro-login"])){
                            echo "<br/>";
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "USUÁRIO OU SENHA INVÁLIDOS!";
                            echo "</div>";
                        }
                    ?>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-light botao-enviar">ENTRAR NA AVENTURA</button>
                    </div>                     
                </form>

                <h3 class="link-criar-conta">
                    Não possui conta? 
                    <a href="http://localhost/prj-integrador-jogo-site/paginas/criar-conta.php">Criar Conta</a>
                </h3><br/>

                <div class="d-grid gap-2">
                    <a href='./pagina-ranking.php' type='button' class='btn btn-lg btn-outline-light botao-sair'>
                        RANKING DOS HERÓIS
                    </a>
                </div>
            </div>
        </div>
        
        <!--#### RECUPERAÇÃO DE SENHA ####-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Recuperação de senha</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p>Confirme seu e-mail para enviarmos a recuperação</p>
                    </div>
                    <form action="http://localhost/prj-integrador-jogo-site/paginas/php/email-ctrl.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="esqueci-senha-email" placeholder="meu_email@mail.com" name="email-destino" required>
                            <label for="esqueci-senha-email">EMAIL*</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">RECUPERAR SENHA</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                </div>
              </div>
            </div>
        </div>

        <?php
            if(isset($_SESSION["erro-login"])){
                unset($_SESSION["erro-login"]);
            }
            if(isset($_SESSION["sucesso-conta"])){
                unset($_SESSION["sucesso-conta"]);
            }
        ?>
    </body>
</html>