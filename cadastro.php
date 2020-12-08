<?php   

include('senha.php');

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$email = $_POST['email'];
$nome = $_POST['nome'];

$senha = new Senha();

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host = "mail.pupill.us"; 

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 587; 

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;


// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'treinamento@pupill.us'; 
$mail->Password = $senha->_senha; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
 $mail->SMTPDebug = 1; 

// Define o remetente 
// Seu e-mail 
$mail->From = "treinamento@pupill.us"; 

// Seu nome 
$mail->FromName = "Henrique Arnaud"; 

// Define o(s) destinatário(s) 
$mail->AddAddress($email, $nome); 

$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = "Assunto da mensagem"; 

// Corpo do email 
$mail->msgHTML(file_get_contents('email.html'), __DIR__);
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 


?>