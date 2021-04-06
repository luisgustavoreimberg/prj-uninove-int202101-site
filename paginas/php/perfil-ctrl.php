<?php
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        session_start();
        
        $user = "root"; 
        $password = ""; 
        $database = "uninove_jogo";
        $hostname = "localhost";
        $conn = new mysqli($hostname, $user, $password, $database) or die('ERRO CONN');

        $query = "SELECT UsuarioNome, UsuarioSobrenome, UsuarioEmail, UsuarioApelido, UsuarioSenha FROM usuario WHERE UsuarioID = ".$_SESSION['usuario'];

        $result = $conn->query($query) or die('ERRO QUERY '.$query);
        $row = $result->fetch_row();

        if(empty($row))
        {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('SEM INFORMAÇÕES DE PERFIL!')
            window.location.href='http://localhost/prj-integrador-jogo-site/paginas/pagina-inicial.php';
            </SCRIPT>");
            
        }else{
            $_SESSION["perfil-nome"] = $row[0];
            $_SESSION["perfil-sobrenome"] = $row[1];
            $_SESSION["perfil-email"] = $row[2];
            $_SESSION["perfil-apelido"] = $row[3];
            $_SESSION["perfil-senha"] = $row[4];
            header('location: http://localhost/prj-integrador-jogo-site/paginas/pagina-perfil.php');
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();
        $user = "root"; 
        $password = ""; 
        $database = "uninove_jogo";
        $hostname = "localhost";
        $conn = new mysqli($hostname, $user, $password, $database) or die('ERRO CONN');

        $query = "UPDATE usuario SET UsuarioNome = '".$_POST["atualizacao-nome"]."', UsuarioSobrenome = '".$_POST["atualizacao-sobrenome"]."', UsuarioEmail = '".$_POST["atualizacao-email"]."', UsuarioApelido = '".$_POST["atualizacao-apelido"]."', UsuarioSenha = '".$_POST["atualizacao-senha"]."' WHERE UsuarioID = ".$_SESSION['usuario'];
        $conn->query($query) or die('ERRO QUERY '.$query);

        unset($_SESSION["perfil-nome"]);
        unset($_SESSION["perfil-sobrenome"]);
        unset($_SESSION["perfil-email"]);
        unset($_SESSION["perfil-apelido"]);
        unset($_SESSION["perfil-senha"]);
        
        header("Location: http://localhost/prj-integrador-jogo-site/paginas/pagina-perfil.php");
    }
?>