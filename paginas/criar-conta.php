<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Criar Conta</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./estilos/base.css">
        <link rel="stylesheet" href="./estilos/login.css">
    </head>

    <body>

        <div class="grupo-formulario-login">
            <div class="titulo-jogo">G'Mola Adventure</div>

            <div class="formulario-login">
                    <form action="http://localhost/prj-integrador-jogo-site/paginas/php/criar-conta-ctrl.php" method="POST">
                        <div class="row">
                            <h2><strong>Preencha os dados para criar sua conta:</strong></h2>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="campo_cadastro_nome" placeholder="nome" 
                                    name="conta-nome" required>
                                    <label for="campo_cadastro_nome"><strong>NOME*</strong></label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="campo_cadastro_sobrenome" placeholder="sobrenome"
                                    name="conta-sobrenome">
                                    <label for="campo_cadastro_sobrenome"><strong>SOBRENOME</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="campo_cadastro_email" placeholder="meu_email@mail.com" 
                            name="conta-email" required>
                            <label for="campo_cadastro_email"><strong>EMAIL*</strong></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="campo_cadastro_apelido" placeholder="meu_apelido" 
                            name="conta-apelido" required>
                            <label for="campo_cadastro_email"><strong>APELIDO*</strong></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="campo_cadastro_senha" placeholder="senha" 
                            name="conta-senha" required>
                            <label for="campo_cadastro_senha"><strong>SENHA*</strong></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="campo_cadastro_senha_confirmacao" placeholder="minha_senha" 
                            name="conta-senhaconf" required>
                            <label for="campo_cadastro_senha_confirmacao"><strong>CONFIRMAÇÃO DE SENHA*</strong></label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-light botao-enviar">CRIAR CONTA</button>
                        </div>
                    </form>
            </div>
        </div>

    </body>
</html>