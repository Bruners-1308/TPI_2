<?php

//https://support.google.com/accounts/answer/6010255?hl=pt-BR

require('class.phpmailer.php'); //chama a classe de onde você a colocou.
require('class.smtp.php'); //chama a classe de onde você a colocou.

// Instância do objeto PHPMailer
$mail = new PHPMailer;

// Configura para envio de e-mails usando SMTP
$mail->isSMTP();

// Servidor SMTP
$mail->Host = 'smtp.gmail.com';

// Usar autenticação SMTP
$mail->SMTPAuth = true;

$mail->SMTPDebug  = 1; 

// Usuário da conta
$mail->Username = 'allantestecamargo@gmail.com';

// Senha da conta
$mail->Password = 'senha';

// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';

// Porta do servidor SMTP
$mail->Port = 465;

// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);

// Email do Remetente
$mail->From = 'allan.vidal@gmail.com';

// Nome do Remetente
$mail->FromName = 'ETEC CAMARGO ARANHA';

// Endereço do e-mail do destinatário
$mail->addAddress('allantestecamargo@gmail.com');

// Assunto do e-mail
$mail->Subject = 'Assunto do E-mail';

// Mensagem que vai no corpo do e-mail
$mail->Body = '<h1>Mensagem com Abacaxi</h1>';

// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;

?>