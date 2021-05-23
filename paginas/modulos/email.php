<?php

class Email{
    function EnviarEmail($data, $hora, $senhaTemp, $destinatario){
        require "../modulos/PHPMailer/PHPMailerAutoload.php"; 

        //CONFIGURAÇÕES
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        //CONTA DE ENVIO
        $mail->Username = 'suporte.gmola@gmail.com';
        $mail->Password = '202101godotGMola';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->IsHTML(true);

        //REMETENTE
        $mail->From = 'suporte.gmola@gmail.com';
        $mail->FromName = 'Equipe Gmola';

        // DESTINATÁRIO
        $mail->addAddress($destinatario);

        // ASSUNTO
        $mail->Subject = 'Gmola :: Recuperacao De Senha '.date('ymdHis');

        // EMAIL
        $mail->Body = "
        <div class='corpo-email' style='width: 600px;padding: 2%;margin: auto;'>
            <h1 class='jogo-titulo' style='font-family: 'Pieces of Eight';font-size: 2.5em;text-align: center;'>
                G'Mola Adventure
            </h1>

            <p>
                Uma solicitação de recuperação de senha foi realizada às <strong>".$hora."</strong> do dia <strong>".$data."</strong>
            </p>

            <table class='conteudo-senha' style='margin: auto;'>
                <tr>
                    <td>
                        <strong>SENHA TEMPORÁRIA:</strong>
                    </td>
                    <td>".$senhaTemp."</td>
                </tr>
            </table>

            </p>
                Realize o login no site utilizando esta senha.<br/>
                <strong>IMPORTANTE: </strong>A nova senha só funciona para 1 login. Caso necessário, realize a alteração de senha no site.
            </p>

            <div class='rodape-email' style='background-color: rgb(70, 108, 179);color: rgb(255, 255, 255);padding: 2%;font-size: 1.3em;'>
                Atenciosamente,<br/>
                Equipe do G'Mola Adventure.
            </div>
        </div>
        ";

        if($mail->Send()):
            return 'SUCESSO! SENHA ENVIADA AO EMAIL INFORMADO.';
        else:
            return 'ERRO AO ENVIAR A SENHA: ' . $mail->ErrorInfo;
        endif;
    }
}

?>