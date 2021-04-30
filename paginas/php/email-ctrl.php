<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();

        $corpo = "
        <style type='text/css'>
            @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
            @font-face{
                src:url('../../fonts/PiecesOfEight/Pieces of Eight.ttf');
                font-family: 'Pieces of Eight';
            }

            body{
                font-family: 'Comic Neue';
            }

            .jogo-titulo{
                font-family: 'Pieces of Eight';
                font-size: 2.5em;
                text-align: center;
            }

            .corpo-email{
                width: 600px;
                padding: 2%;
                margin: auto;
            }

            .conteudo-senha{    
                margin: auto;
            }

            .rodape-email{
                background-color: rgb(70, 108, 179);
                color: rgb(255, 255, 255);
                padding: 2%;
                font-size: 1.3em;
            }
        </style>
        <html>
            <div class=corpo-email>
                <h1 class='jogo-titulo'>G'Mola Adventure</h1>

                <p>
                    Uma solicitação de recuperação de senha foi realizada às <strong>00:00</strong> do dia <strong>dd/mm/aaaa</strong>
                <p>

                <table class='conteudo-senha'>
                    <tr>
                        <td>
                            <strong>NOVA SENHA:</strong>
                        </td>
                        <td>000000</td>
                    </tr>
                </table>

                <p>
                    Realize o login no site utilizando esta senha e realize a atualização da senha.
                </p>

                <div class='rodape-email'>
                    Atenciosamente,<br/>
                    Equipe do G'Mola Adventure.
                <div>
            <div>
        </html>
        ";

        $assunto = "G'mola :: Recuperação de senha";

        $email = "MIME-Version: 1.1 \r\n";
        $email .= "Content-type: text/html; charset=UTF-8 \r\n";
        $email .= "From: luisgustavoreimberg@uni9.edu.br \r\n";
        $email .= "Return-Path: luisgustavoreimberg@uni9.edu.br\r\n";

        $enviaremail = mail($_POST["email-destino"], $assunto, $corpo, $email);

        echo $enviaremail;

    }
    // else{
    //     unset($_SESSION["erro-login"]);
    //     header("Location: ../login.php");
    // }

?>