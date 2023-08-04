<?php
session_start();

$arquivo=fopen("../../sistema/arquivo.txt", "a");

$vetor=[];

foreach ($_POST as $key ) {
	$vetor[]=str_replace("#", " ", $key); // str substituir os # por espaços 
}

$vetor=implode(" ", $vetor); // juntar a parti dos espaços 


fwrite($arquivo,$_SESSION["id"].' '.$vetor .PHP_EOL);
fclose($arquivo);
  
  header("Location: abrir_chamado.php") // assim logo apos registrar chamado ja volta para tela e abrir chamado assim usuario nem percebendo 

/*echo "<pre>";
print_r($_POST);S
echo "<pre>";*/
?>