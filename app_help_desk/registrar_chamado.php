<?php

$arquivo=fopen("arquivo.txt", "a");

$vetor=[];

foreach ($_POST as $key ) {
	$vetor[]=str_replace("#", " ", $key); // str substituir os # por espaços 
}

$vetor=implode(" ", $vetor); // juntar a parti dos espaços 


fwrite($arquivo, $vetor .PHP_EOL);
fclose($arquivo);

/*echo "<pre>";
print_r($_POST);
echo "<pre>";*/
?>