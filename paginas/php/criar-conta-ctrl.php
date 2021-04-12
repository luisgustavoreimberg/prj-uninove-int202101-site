<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["conta-senha"] == $_POST["conta-senhaconf"]){

            if(empty($row)){
                $query = "INSERT INTO usuario(UsuarioNome, UsuarioSobreNome, UsuarioApelido,UsuarioEmail, UsuarioSenha)
                VALUES('".$_POST["conta-nome"]."','".$_POST["conta-sobrenome"]."', '".$_POST["conta-apelido"]."','".$_POST["conta-email"]."','".$_POST["conta-senha"]."')";
                $conn->query($query) or die('ERRO AO INSERIR USUÁRIO'.$query);
                
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('USUÁRIO CRIADO COM SUCESSO!')
                window.location.href='http://localhost/prj-integrador-jogo-site/paginas/login.php';
                </SCRIPT>");
            }else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('USUÁRIO ".$_POST["conta-apelido"]." COM EMAIL ".$_POST["conta-email"]." JÁ EXISTENTE!')
                window.history.back();
                </SCRIPT>");
            }
        }else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('SENHA DIFERENTE DA CONFIRMAÇÃO!')
            window.history.back();
            </SCRIPT>");
        }
    }else{
        header("Location: ../criar-conta.php");
    }
?>