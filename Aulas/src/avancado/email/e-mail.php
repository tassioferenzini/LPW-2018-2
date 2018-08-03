<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 08/01/2018
 * Time: 16:21
 */

use PHPMailer\PHPMailer\PHPMailer;
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";


$mail = new PHPMailer;

$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = "tassio@tassio.eti.br";
$mail->Password = "senha";


$mail->setFrom('tassio@tassio.eti.br', 'Tassio Sirqueira');

//$mail->addReplyTo('tassio@tassio.eti.br', 'Tassio Sirqueira');

$mail->addAddress('tmsirqueira@vianna.edu.br', 'Prof. Tassio Sirqueira');

$mail->Subject = 'Teste de Envio de E-mail pelo GMAIL';

$mail->msgHTML("Teste de envio OK!");

$mail->addAttachment('phpmailer.png');

if (!$mail->send()) {
    echo "Erro ao enviar o E-mail: " . $mail->ErrorInfo;
} else {
    echo "E-mail enviado com sucesso!";
}