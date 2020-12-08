<?php 
class ArquivosCsv{

    function ler_arquivo(){
    $arquivo = fopen("../Model/malling.csv", "r");

    $header = fgetcsv($arquivo, 1000, ";");

    while ($row = fgetcsv($arquivo, 1000, ",")) {
        $usuarios[] = array_combine($header, $row);
    }
    print_r($usuarios);

    fclose($arquivo);    
    }

    function populaBanco(){
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'emailmarketing';

        $con = new mysqli($host,$usuario,$senha,$banco);
        if(mysqli_connect_errno()){
		    exit("Erro ao conectar-se ao banco de dados: ".mysqli_connect_error());
        }
    }

}
?>