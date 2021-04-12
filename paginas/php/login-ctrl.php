<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        require_once 'servicos/requisicao-servico.php';
        $url  = "http://localhost/prj-integrador-servico/View/usuario/login-usuario.php";

        $dados = array(
            'usuario' => $_POST["login-usuario"],
            'senha' => $_POST["login-senha"]
        );
        $r = json_decode(chamarAPI("POST", $url, json_encode($dados)));
        if(!isset($r->UsuarioID)){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('USUÁRIO OU SENHA INVÁLIDOS!')
            window.history.back();
            </SCRIPT>");
        }else{
            session_start();
            $_SESSION["usuario"] = $r;
            header("Location: ../pagina-inicial.php");
        }
    }else{
        header("Location: ../login.php");
    }

?>