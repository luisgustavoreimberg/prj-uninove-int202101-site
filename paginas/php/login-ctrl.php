<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();
        if(isset($_SESSION["erro-login"])){
            unset($_SESSION["erro-login"]);
        }
        require_once 'servicos/requisicao-servico.php';
        $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/login-usuario.php";

        $dados = array(
            'usuario' => $_POST["login-usuario"],
            'senha' => $_POST["login-senha"]
        );

        $resposta = json_decode(chamarAPI("POST", $url, json_encode($dados)));

        if(!isset($resposta->ObjetoResposta->UsuarioID)){
            $_SESSION["erro-login"] = "USUÁRIO OU SENHA INVÁLIDOS!";
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.history.back();
            </SCRIPT>");
        }else{
            unset($_SESSION["erro-login"]);
            $_SESSION["usuario"] = $resposta->ObjetoResposta;
            $_SESSION["usuario-apelido"] = $_SESSION["usuario"]->UsuarioApelido;
            $_SESSION["usuario-id"] = $_SESSION["usuario"]->UsuarioID;
            header("Location: ../pagina-inicial.php");
        }
    }else{
        unset($_SESSION["erro-login"]);
        header("Location: ../login.php");
    }

?>