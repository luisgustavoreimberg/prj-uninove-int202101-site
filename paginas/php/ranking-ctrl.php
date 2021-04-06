<?php
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        session_start();

        $usuarioDB = "root"; 
        $senhaDB = ""; 
        $baseDeDados = "uninove_jogo";
        $nomeHost = "localhost";
        $conn = new mysqli($nomeHost, $usuarioDB, $senhaDB, $baseDeDados) or die('Sem conexão com o servidor!');

        $query = "SELECT rk.RankingPos AS posicao,
        CASE WHEN (ISNULL(us.UsuarioApelido) OR us.UsuarioApelido='') THEN us.UsuarioNome ELSE us.UsuarioApelido END AS 'nome'
        FROM ranking rk 
        INNER JOIN usuario us ON us.UsuarioID = rk.UsuarioID
        ORDER BY rk.RankingPos";

        $result = $conn->query($query) or die('Erro na query de login!'.$query);
            
        while ($row = mysqli_fetch_assoc($result)) {
            $res[] = $row;
        }

        $_SESSION["ranking"] = $res;
        header('location: http://localhost/prj-integrador-jogo-site/paginas/pagina-inicial.php');
    }
?>