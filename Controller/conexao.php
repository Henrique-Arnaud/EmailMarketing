<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'emailmarketing';

    $con = new mysqli($host,$usuario,$senha,$banco);
    if($con){
      echo "BELEZA";
    }
    else{
      echo "NAO BELEZA";
    }
    if(mysqli_connect_errno()){
		exit("Erro ao conectar-se ao banco de dados: ".mysqli_connect_error());
    }
?>