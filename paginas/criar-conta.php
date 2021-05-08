<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Criar Conta</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/criar-conta.css">
    </head>

    <body>
        <?php 
            session_start();
        ?>

        <div class="grupo-formulario-cadastro">
            <div class="titulo">
                G'Mola Adventure
            </div>

            <div class="formulario-cadastro">
                    <form action="./php/criar-conta-ctrl.php" method="POST">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="./login.php" type="button" class="btn btn-outline-light btn-lg botao-login" data-bs-toggle="tooltip" data-bs-placement="right" title="MEU PERFIL">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                </svg> LOGIN
                            </a>
                        </div>

                        <div class="row">
                            <h2><strong>Preencha os dados para criar sua conta:</strong></h2>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" 
                                    id="campo_cadastro_nome" placeholder="nome" 
                                    name="conta-nome" required>
                                    <label for="campo_cadastro_nome"><strong>NOME*</strong></label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" 
                                    id="campo_cadastro_sobrenome" placeholder="sobrenome"
                                    name="conta-sobrenome">
                                    <label for="campo_cadastro_sobrenome"><strong>SOBRENOME</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control <?php echo (isset($_SESSION["erro-criar-conta"])?"is-invalid":""); ?>"
                            id="campo_cadastro_email" placeholder="meu_email@mail.com" 
                            name="conta-email" required>
                            <label for="campo_cadastro_email"><strong>EMAIL*</strong></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control <?php echo (isset($_SESSION["erro-criar-conta"])?"is-invalid":""); ?>" 
                            id="campo_cadastro_apelido" placeholder="meu_apelido" 
                            name="conta-apelido" required>
                            <label for="campo_cadastro_email"><strong>APELIDO*</strong></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control <?php echo (isset($_SESSION["erro-criar-conta-preenchimento"])?"is-invalid":""); ?>" 
                            id="campo_cadastro_senha" placeholder="senha" minlength="5"
                            name="conta-senha" required>
                            <label for="campo_cadastro_senha"><strong>SENHA*</strong></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control <?php echo (isset($_SESSION["erro-criar-conta-preenchimento"])?"is-invalid":""); ?>"
                            id="campo_cadastro_senha_confirmacao" placeholder="minha_senha"
                            name="conta-senhaconf" required>
                            <label for="campo_cadastro_senha_confirmacao"><strong>CONFIRMAÇÃO DE SENHA*</strong></label>
                        </div>

                        <?php
                            if(isset($_SESSION["erro-criar-conta"])){
                                echo "<div class='alert alert-danger' role='alert'>";
                                echo $_SESSION["erro-criar-conta"];
                                echo "</div>";
                            }
                
                            if(isset($_SESSION["erro-criar-conta-preenchimento"])){
                                echo "<div class='alert alert-danger' role='alert'>";
                                echo $_SESSION["erro-criar-conta-preenchimento"];
                                echo "</div>";
                            }
                        ?>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-light botao-enviar">CRIAR CONTA</button>
                        </div>
                    </form>
            </div>
        </div>        

        <?php 
            if(isset($_SESSION["erro-criar-conta-preenchimento"])){
                unset($_SESSION["erro-criar-conta-preenchimento"]);
            }
            if(isset($_SESSION["erro-criar-conta"])){
                unset($_SESSION["erro-criar-conta"]);
            }
        ?>
    </body>
</html>