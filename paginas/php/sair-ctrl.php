<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        session_start();
        $_SESSION = array();
        header("Location: http://localhost/prj-integrador-jogo-site/paginas/login.php");
    }
?>