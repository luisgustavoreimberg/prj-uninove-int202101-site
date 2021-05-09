<?php


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();

        if(isset($_SESSION["erro-recuperacao"])){
            unset($_SESSION["erro-recuperacao"]);
        }

        if($_POST["email-destino"]){
            date_default_timezone_set ( "America/Sao_Paulo" );
            $data = date('d/m/y');
            $tempo = date('H:i');
            $senha = bin2hex(openssl_random_pseudo_bytes(5));

            require_once 'servicos/requisicao-servico.php';
            $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/recuperar-senha.php";

            $dados = array(
                'email' => $_POST["email-destino"],
                'senha' => $senha
            );

            $resposta = json_decode(chamarAPI("POST", $url, json_encode($dados)));

            if($resposta->Sucesso){
                include "../modulos/email.php";
                $email = new Email();
                $_SESSION["sucesso-recuperacao"] = $email->EnviarEmail($data, $tempo, $senha, $_POST["email-destino"]);
            }else{
                $_SESSION["erro-recuperacao"] = mb_strtoupper($resposta->MensagemResposta, 'UTF-8');
            }

        }else{
            $_SESSION["erro-recuperacao"] = "SEM DADOS PARA RECUPERAR SENHA!";
        }
    }

    header("Location: ../login.php");
?>