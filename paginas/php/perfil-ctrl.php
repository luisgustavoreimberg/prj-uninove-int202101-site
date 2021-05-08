<?php
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        session_start();
        
        require_once 'servicos/requisicao-servico.php';
        $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/buscar-usuario.php";

        $dados = array(
            'id' => $_SESSION["usuario-id"],
        );

        $resposta = json_decode(chamarAPI("GET", $url, $dados));

        if(!isset($resposta->ObjetoResposta))
        {
            header('location: ../pagina-inicial.php');
        }else{
            if(isset($_SESSION["usuario"])){
                unset($_SESSION["usuario"]);
            }
            $_SESSION["usuario"] = $resposta->ObjetoResposta;
            json_encode($_SESSION["usuario"]);
            header('location: ../pagina-perfil.php');
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();

        if(isset($_SESSION["sucesso-atualizacao"])){
            unset($_SESSION["sucesso-atualizacao"]);
        }
        
        require_once 'servicos/requisicao-servico.php';
        $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/atualizar-usuario.php";

        $dados = array(
            'id' => $_SESSION["usuario-id"],
            'nome' => $_POST["atualizacao-nome"],
            'sobrenome' => $_POST["atualizacao-sobrenome"],
            'apelido' => $_POST["atualizacao-apelido"],
            'email' => $_POST["atualizacao-email"]
        );

        $resposta = json_decode(chamarAPI("POST", $url, json_encode($dados)));

        echo json_encode($resposta);

        if($resposta->Sucesso){
            $_SESSION["sucesso-atualizacao"] = "DADOS ATUALIZADOS COM SUCESSO!";
        }else{
            $_SESSION["erro-atualizacao"] = empty($resposta->MensagemResposta) ? "ERRO NA ATUALIZAÇÃO DE DADOS" : mb_strtoupper($resposta->MensagemResposta, 'UTF-8');
        }
        header('location: ./perfil-ctrl.php');
    }
?>