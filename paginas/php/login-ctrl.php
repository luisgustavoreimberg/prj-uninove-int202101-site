<html>
    <head>
        <title>Login</title>

        <link rel="stylesheet" href="./estilos/base.css">
    </head>

    <body>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                session_start();

                $usuarioDB = "root"; 
                $senhaDB = ""; 
                $baseDeDados = "uninove_jogo";
                $nomeHost = "localhost";
                $conn = new mysqli($nomeHost, $usuarioDB, $senhaDB, $baseDeDados) or die('Sem conexão com o servidor!');

                $query = "SELECT UsuarioID FROM usuario WHERE (UsuarioApelido = '".$_POST["login-usuario"]."' OR UsuarioEmail = '".$_POST["login-usuario"]."') AND UsuarioSenha = '".$_POST["login-senha"]."'";
                $result = $conn->query($query) or die('Erro na query de login!'.$query);
                $row = $result->fetch_row();

                if(empty($row))
                {
                    unset($_SESSION['usuario']);

                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('USUÁRIO OU SENHA INVÁLIDOS!')
                        window.location.href='http://localhost/prj-integrador-jogo-site/paginas/login.php';
                        </SCRIPT>");
                }else{
                    $_SESSION['usuario'] = $row[0];
                    header("Location: http://localhost/prj-integrador-jogo-site/paginas/pagina-inicial.php");
                }
            }
        ?>
    </body>

</html>