<?php 
class ArquivosCsv{

    function ler_arquivo(){
    $arquivo = fopen("../Model/file.csv", "r");

    $header = fgetcsv($arquivo, 1000, ",");

    while ($row = fgetcsv($arquivo, 1000, ",")) {
        $usuarios[] = array_combine($header, $row);
    }
    print_r($usuarios);

    fclose($arquivo);    
    }

}
?>