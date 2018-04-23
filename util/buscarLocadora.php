<?php

require_once('ConnectionFactory.class.php'); 
require_once('../control/locadoraControl.php');

//Formulario
$id_locadora = $_POST['id_locadora'];



$locadoraDao = new locadoraDao();

$dados = $locadoraDao->buscarDados($id_locadora);

if(!$dados){
	echo "
		
		<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../alterarLocadora.php'>
	";
}else{
	header("location:../".$dados.".php");
}

?>