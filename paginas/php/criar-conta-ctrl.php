<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user = "root"; 
        $password = ""; 
        $database = "uninove_jogo";
        $hostname = "localhost";
        $conn = new mysqli($hostname, $user, $password, $database) or die('ERRO CONN');

        $query = "INSERT INTO usuario(UsuarioNome, UsuarioSobreNome, UsuarioEmail, UsuarioSenha)
                  VALUES('".$_POST["conta-nome"]."','".$_POST["conta-sobrenome"]."','".$_POST["conta-email"]."','".$_POST["conta-senha"]."')";
        $conn->query($query) or die('ERRO QUERY '.$query);

        $query = "SELECT * FROM usuario WHERE UsuarioApelido = '".$_POST["login-usuario"]."' AND UsuarioSenha = '".$_POST["login-senha"]."'";
        $result = $conn->query($query) or die('ERRO QUERY '.$query);
            $row = $result->fetch_row();

        if(empty($row))
        {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('NÃO FOI POSSÍVEL CRIAR O USUÁRIO!')
            window.location.href='http://localhost/prj-integrador-jogo-site/paginas/login.php';
            </SCRIPT>");
            
        }else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('CONTA CRIADA COM SUCESSO!')
            window.location.href='http://localhost/prj-integrador-jogo-site/paginas/login.php';
            </SCRIPT>");
        }
    }
?>