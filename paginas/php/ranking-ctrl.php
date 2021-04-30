<?php
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        session_start();

        require_once 'servicos/requisicao-servico.php';
        $url  = "http://gmolaadventure.orgfree.com/prj-integrador-servico/View/ranking/consulta-ranking.php";

        $resposta = json_decode(chamarAPI("GET", $url, null));

        $_SESSION["ranking"] = $resposta->ObjetoResposta;

        // echo $_SESSION["ranking"];
        header('location: http://localhost/prj-integrador-jogo-site/paginas/pagina-ranking.php');

    }
?>