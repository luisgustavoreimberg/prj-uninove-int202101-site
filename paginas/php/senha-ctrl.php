<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();

        if(isset($_SESSION["erro-atualizacao"])){
            unset($_SESSION["erro-atualizacao"]);
        }
        if(isset($_SESSION["sucesso-atualizacao"])){
            unset($_SESSION["sucesso-atualizacao"]);
        }

        if($_POST["atualizacao-senha-atual"] == $_SESSION["usuario"]->UsuarioSenha){
            if($_POST["atualizacao-senha-nova"] == $_POST["atualizacao-senha-conf-nova"]){

                require_once 'servicos/requisicao-servico.php';
                $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/atualiza-senha.php";

                $dados = array(
                    'id' => $_SESSION["usuario-id"],
                    'senha' => $_POST["atualizacao-senha-nova"]
                );

                $resposta = json_decode(chamarAPI("POST", $url, json_encode($dados)));

                if($resposta->Sucesso){
                    $_SESSION["sucesso-atualizacao"] = "SENHA ATUALIZADA COM SUCESSO!";
                    header('location: ./perfil-ctrl.php');
                    return;
                }else{
                    $_SESSION["erro-atualizacao"] = empty($resposta->MensagemResposta) ? "ERRO NA ATUALIZAÇÃO DE SENHA" : $resposta->MensagemResposta;
                }

            }else{
                $_SESSION["erro-atualizacao"] = "SENHAS DE ATUALIZAÇÃO DIVERGENTES!";
            }
        }else{
            $_SESSION["erro-atualizacao"] = "SENHA ATUAL INVÁLIDA!";
        }
        header('location: ../pagina-perfil.php');

    }else{
        unset($_SESSION["erro-atualizacao"]);
        header('location: ./perfil-ctrl.php');
    }

?>