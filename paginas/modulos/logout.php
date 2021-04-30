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