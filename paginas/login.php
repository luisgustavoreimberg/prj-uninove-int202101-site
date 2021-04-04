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

        <div class="grupo-formulario-login">
            <div class="titulo-jogo">NOME DO JOGO</div>

            <div class="formulario-login">
                <div class="info-formulario-jogo">Preencha as informações para entrar em sua aventura:</div><br/>

                <!--#### LOGIN ####-->
                <form action="http://localhost/prj-integrador-jogo-site/paginas/php/login-ctrl.php" method="post">
                    <div class="form-floating mb-3">
                        <!-- is-invalid -->
                        <input type="text" class="form-control" 
                        id="campo_usuario" placeholder="meu_usuario"
                        name="login-usuario" required>
                        <label class="campo_titulo" for="campo_usuario">USUÁRIO OU EMAIL</label>
                    </div>

                    <div class="campo-senha">
                        <div class="form-floating">
                            <input type="password" class="form-control campo-senha-input" 
                            id="campo_senha" placeholder="minha_senha" aria-describedby="esqueci-senha"
                            name="login-senha" required>
                            <label class="campo_titulo" for="campo_senha">SENHA</label>
                        </div>
                        <button type="button" id="esqueci-senha" class="btn btn-outline-light botao-esqueci-senha" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueci minha senha</button>
                    </div><br/>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-light botao-enviar">Entrar na aventura</button>
                    </div><br/>
                      
                </form>

                <div class="link-criar-conta">
                    Não possui conta? <a data-bs-toggle="collapse" href="#cadastro_novo_usuario" aria-expanded="false" aria-controls="cadastro_novo_usuario">Criar Conta</a>
                </div>

                <!--#### CRIAR CONTA ####-->
                <div class="collapse" id="cadastro_novo_usuario">
                    <div class="card card-body">
                        <form action="http://localhost/prj-integrador-jogo-site/paginas/php/criar-conta-ctrl.php" method="POST">
                            <div class="row">
                                <h3>Preencha os dados para criar sua conta:</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="campo_cadastro_nome" placeholder="nome" 
                                        name="conta-nome" required>
                                        <label for="campo_cadastro_nome">NOME*</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="campo_cadastro_sobrenome" placeholder="sobrenome"
                                        name="conta-sobrenome">
                                        <label for="campo_cadastro_sobrenome">SOBRENOME</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="campo_cadastro_email" placeholder="meu_email@mail.com" 
                                name="conta-email" required>
                                <label for="campo_cadastro_email">EMAIL*</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="campo_cadastro_apelido" placeholder="meu_apelido" 
                                name="conta-apelido" required>
                                <label for="campo_cadastro_email">APELIDO*</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="campo_cadastro_senha" placeholder="senha" 
                                name="conta-senha" required>
                                <label for="campo_cadastro_senha">SENHA*</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="campo_cadastro_senha_confirmacao" placeholder="minha_senha" 
                                name="conta-senhaconf" required>
                                <label for="campo_cadastro_senha_confirmacao">CONFIRMAÇÃO DE SENHA*</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark">Criar conta</button>
                            </div>

                        </form>
                    </div>
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
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="esqueci-senha-email" placeholder="meu_email@mail.com" required>
                        <label for="esqueci-senha-email">EMAIL*</label>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary">RECUPERAR SENHA</button>
                </div>
              </div>
            </div>
        </div>


    </body>
</html>