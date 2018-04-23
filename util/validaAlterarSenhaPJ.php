<?php

require_once('ConnectionFactory.class.php'); 
require_once('../control/PessoaFisicaControl.php');

//Formulario
$pes_cnpj = $_POST['PES_CNPJ'];
$pes_email1 = $_POST['PES_EMAIL1'];
$pes_senha = $_POST['PES_SENHA'];
$nova_senha = $_POST['NOVA_SENHA'];
$nova_senha2 = $_POST['NOVA_SENHA2'];

$pessoaFisicaDao = new PessoaFisicaDao();
$dados = $pessoaFisicaDao->verDadosLogin($pes_email1,$pes_senha);

if(!$dados){
	echo "
		<script>alert('Usuario não encontrado.');</script>
		<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../alterarSenhaPJ.php?id=".$pes_cnpj."'>
	";
}else{
	if($nova_senha == $nova_senha2){
		require_once('../control/PessoaJuridicaControl.php');
		$pessoaJuridicaDao = new PessoaJuridicaDao();
		$res = $pessoaJuridicaDao->alteraSenha($pes_cnpj,$pes_email1,$nova_senha);
		echo "
			<script>alert('".$res."');</script>
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../alterarSenhaPJ.php?id=".$pes_cnpj."'>
		";
	}else{
		echo "
			<script>alert('Nova Senha diferente da Confirmação Nova Senha.');</script>
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../alterarSenhaPJ.php?id=".$pes_cnpj."'>
		";
	}
}

?>