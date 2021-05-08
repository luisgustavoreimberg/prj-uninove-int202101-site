<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        session_start();
        unset($_SESSION["usuario-id"]);
        unset($_SESSION["usuario"]);
        header("Location: ../login.php");
    }
?>