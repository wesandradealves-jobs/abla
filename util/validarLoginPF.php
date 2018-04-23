<?php

require_once('ConnectionFactory.class.php'); 
require_once('../control/PessoaFisicaControl.php');

//Formulario
$pes_email1 = $_POST['PES_EMAIL1'];
$pes_senha = $_POST['PES_SENHA'];

$pessoaFisicaDao = new PessoaFisicaDao();

$dados = $pessoaFisicaDao->verDadosLogin($pes_email1,$pes_senha);

if(!$dados){
	echo "
		<script>alert('Usuario não encontrado.');</script>
		<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://www.abla.com.br/'>
	";
}else{
	if($_SESSION['id_status']=="admin"){
		header("location:".$dados."wp-content/themes/abla/abla/administracao.php");						
	}else{
		header("location:".$dados.".php");
	}


/*	echo "	
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../alterarFormulario".$dados."'>";*/
}

?>
