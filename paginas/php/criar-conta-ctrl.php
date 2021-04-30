<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();
        if($_POST["conta-senha"] == $_POST["conta-senhaconf"]){

            require_once 'servicos/requisicao-servico.php';
            $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/criar-usuario.php";
    
            $dados = array(
                'nome' => $_POST["conta-nome"],
                'sobrenome' => $_POST["conta-sobrenome"],
                'apelido' => $_POST["conta-apelido"],
                'email' => $_POST["conta-email"],
                'senha' => $_POST["conta-senha"]
            );
    
            $resposta = json_decode(chamarAPI("POST", $url, json_encode($dados)));

            if($resposta->Sucesso == false){
                $encoding = mb_internal_encoding();
                $_SESSION["erro-criar-conta"] = mb_strtoupper($resposta->MensagemResposta, $encoding);
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.history.back();
                </SCRIPT>");
            }else{
                $_SESSION["sucesso-conta"] = true;
                header("Location: ../login.php");
            }

        }else{
            $_SESSION["erro-criar-conta-preenchimento"] = "SENHAS DIVERGENTES";
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.history.back();
            </SCRIPT>");
        }
    }else{
        header("Location: ../criar-conta.php");
    }
?>