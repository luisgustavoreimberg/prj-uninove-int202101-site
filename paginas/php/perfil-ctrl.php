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
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('SEM INFORMAÇÕES DE PERFIL!')
            window.location.href='http://localhost/prj-integrador-jogo-site/paginas/pagina-inicial.php';
            </SCRIPT>");            
        }else{
            unset($_SESSION["usuario"]);
            $_SESSION["usuario"] = $resposta->ObjetoResposta;
            header('location: http://localhost/prj-integrador-jogo-site/paginas/pagina-perfil.php');
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();
        
        require_once 'servicos/requisicao-servico.php';
        $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/usuario/atualizar-usuario.php";

        $dados = array(
            'id' => $_SESSION["usuario-id"],
            'nome' => $_POST["atualizacao-nome"],
            'sobrenome' => $_POST["atualizacao-sobrenome"],
            'apelido' => $_POST["atualizacao-apelido"],
            'email' => $_POST["atualizacao-email"],
            'senha' => $_POST["atualizacao-senha"],
        );

        $resposta = json_decode(chamarAPI("POST", $url, json_encode($dados)));

        echo json_encode($resposta);
        
        header('location: http://localhost/prj-integrador-jogo-site/paginas/php/perfil-ctrl.php');
        // header('location: http://localhost/prj-integrador-jogo-site/paginas/pagina-perfil.php');
    }
?>