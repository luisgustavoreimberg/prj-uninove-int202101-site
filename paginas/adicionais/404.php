<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>404</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Tillana:wght@400;500;600;700;800&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');

            @font-face{
                src:url("../../fonts/PiecesOfEight/Pieces of Eight.ttf");
                font-family: "Pieces of Eight";
            }

            body{
                background-repeat: no-repeat;
                background-size: cover;
                background-color: rgb(0, 0, 0);
                font-family: "Comic Neue";
            }

            .navbar-brand{
                margin: auto;
                font-weight: bold
            }
            .titulo{
                font-size: 3.5em;
                color: rgb(255, 255, 255);
                font-family: "Pieces of Eight";
            }

            .msg_erro{
                background-color: rgba(255, 255, 255, 0.8);
                color: rgba(0, 0, 0, 1);
                box-shadow: inset 0px 0px 50px rgb(0, 0, 0);

                font-size: 2em;
                text-align: center;

                border-radius: 10px;
                width: 45%;
                margin-top: 10%;
                padding: 2%;
            }

            .btn{
                font-size: 1em;
                text-decoration: none;
                color: rgba(0, 0, 0, 1);
                transition: 0.5s;
            }
            .btn:hover{
                letter-spacing: 2px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-light">
                <div class="navbar-brand"> <span class="titulo">G'Mola Adventure</span> </div>
        </nav>
        <div class="container msg_erro">
            Página não encontrada!<br/>
            <a  type="button" class="btn btn-outline-dark" href='http://gmolaadventure.orgfree.com/prj-integrador-jogo-site/paginas/login.php'><strong>
            página inicial
            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-door-open-fill' viewBox='0 0 16 16'>
                <path d='M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z'/>
            </svg>
            </strong></a>
        </div>
    </body>
</html>