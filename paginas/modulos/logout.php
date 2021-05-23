<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sair</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./estilos/base.css">
    </head>

    <body>
        <!-- SAIR -->
        <div class="modal fade" id="modal-sair" tabindex="-1" aria-labelledby="modal-sair-titulo" aria-hidden="true">
            <form action="../paginas/php/sair-ctrl.php" method="GET">
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