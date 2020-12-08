<?php   

include('senha.php');
include('arquivocsv.php');
include('emails.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$tag = $_POST['tag'];


$senha = new Senha();

//inicia a classe de ler arquivos csv
$csv = new ArquivosCsv();

//inicia a classe emails
$mail = new Emails();

$mail->enviar_email($email, $nome, $senha, $tag);

?>