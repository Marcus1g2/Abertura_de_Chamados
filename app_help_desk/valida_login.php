<?php
<<<<<<< HEAD
require_once("../../sistema/valida_login.php");
=======
session_start();

$_SESSION["autenticado"]=false;

$autenticar=false;

$email_arrays=array(
array("email" => "marcusdm157@outlook.com" , "senha" => "1234" ),
array("email" => "contatomarcus@outlook.pt", "senha"=> "1234"),
array("email" => "marcus@outlook.pt", "senha"=> "1234"),
 );


foreach ($email_arrays as $email_pegos) {
	if($email_pegos["email"]== $_POST["email"] && $email_pegos["senha"]===$_POST["senha"]){
		$autenticar=true;
		$_SESSION["autenticado"]=true;
		
	}
}


if ($autenticar){ //porque autenticar so vai existir e ser igual a 1 se passar pelo foreach

	$_SESSION["autenticado"]=true;
	 header("Location: home.php");
	
}
else  {
	header("Location: index.php?login=erro");
} 
/*
echo '<pre>';
print_r($_POST);
echo '<pre>';
*/
>>>>>>> 0dacdc9356f158ec2d4d5d5f4e0a6201a1a6d914
?>