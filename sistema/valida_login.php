<?php
session_start();

$_SESSION["autenticado"]=false;

$autenticar=false;

$id_user_admin=array(1=>"administrador", 2 =>"usuario");
 
$email_arrays=array(
array("id"=> 1 ,"email" => "marcusdm157@outlook.com" , "senha" => "1234","controle_usuario"=> 1  ),
array("id"=> 2 ,"email" => "contatomarcus@outlook.pt", "senha"=> "1234", "controle_usuario"=> 2 ),
array("id"=> 3 ,"email" => "marcus@outlook.pt", "senha"=> "1234", "controle_usuario"=> 2), 
 );

foreach ($email_arrays as $dados_pegos) {
	if($dados_pegos["email"]== $_POST["email"] && $dados_pegos["senha"]===$_POST["senha"]){
		$autenticar=true;
		$_SESSION["autenticado"]=true;
		$_SESSION["id"]=$dados_pegos["id"];
		$_SESSION["controle_usuario"]=$dados_pegos["controle_usuario"];
		
	}
}


if ($autenticar){ //porque autenticar so vai existir e ser igual a 1 se passar pelo foreach

	$_SESSION["autenticado"]=true;
	 header("Location: home.php");
	$_SESSION["id"];
	$_SESSION["controle_usuario"];
}
else  {
	header("Location: index.php?login=erro");
} 
/*
echo '<pre>';
print_r($_POST);
echo '<pre>';
*/
?>