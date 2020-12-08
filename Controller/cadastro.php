<?php   

include('senha.php');
include('arquivocsv.php');

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';


$email = $_POST['email'];
$nome = $_POST['nome'];
$tag = $_POST['tag'];


$senha = new Senha();

//inicia a classe de ler arquivos csv
$csv = new ArquivosCsv();

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

?>