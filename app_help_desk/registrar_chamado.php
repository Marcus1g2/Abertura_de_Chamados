<?php
<<<<<<< HEAD
session_start();

$arquivo=fopen("../../sistema/arquivo.txt", "a");
=======

$arquivo=fopen("arquivo.txt", "a");
>>>>>>> 0dacdc9356f158ec2d4d5d5f4e0a6201a1a6d914

$vetor=[];

foreach ($_POST as $key ) {
	$vetor[]=str_replace("#", " ", $key); // str substituir os # por espaços 
}

$vetor=implode(" ", $vetor); // juntar a parti dos espaços 


<<<<<<< HEAD
fwrite($arquivo,$_SESSION["id"].' '.$vetor .PHP_EOL);
fclose($arquivo);
  
  header("Location: abrir_chamado.php") // assim logo apos registrar chamado ja volta para tela e abrir chamado assim usuario nem percebendo 

/*echo "<pre>";
print_r($_POST);S
=======
fwrite($arquivo, $vetor .PHP_EOL);
fclose($arquivo);

/*echo "<pre>";
print_r($_POST);
>>>>>>> 0dacdc9356f158ec2d4d5d5f4e0a6201a1a6d914
echo "<pre>";*/
?>