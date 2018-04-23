<?php

require_once('ConnectionFactory.class.php'); 
require_once('../control/PessoaFisicaControl.php');

//Formulario
$pes_cpf = $_POST['PES_CPF'];


$pessoaFisicaDao = new PessoaFisicaDao();
$dados = $pessoaFisicaDao->verDadosLembrarSenha($pes_cpf);

if(!$dados){
	echo "
		<script>alert('E-mail não encontrado.');</script>
		<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../lembrarSenha.php'>
	";
}else{	
	//Envio de email com senha
	$email = $dados['PES_EMAIL1'];
	$destino = $email;
	$cliente = 'Abla';
	$remetente = 'base@baseinformatica.com';
	$assunto = 'Senha de Acesso ao Sistema Abla';
	$headers = "Content-Type: text/html; charset=iso-8859-1\r\n"; 
	$headers.="From:".$cliente."<" . $remetente . ">\r\n";
	
	$mensagem="";
	
	$mensagem.="<table>";
	$mensagem.="<tr>";
	$mensagem.="<td align='right'><td colspan='2'>Lembrete de senha</td>";
	$mensagem.="</tr>";
	$mensagem.="<tr>";
	$mensagem.="<td align='right'><td colspan='2'>
	Lembre-se de atualizar regularmente as suas informações e até breve.</td>";
	$mensagem.="</tr>";
	$mensagem.="<tr>";
	$mensagem.="<tr>";
	$mensagem.="<td align='right'><td colspan='2'>
	Dados de acesso ao sistema Abla:</td>";
	$mensagem.="</tr>";
	$mensagem.="<tr>";
	$mensagem.="<td align='right'><b>Email:</b></td><td> ".$destino."</td>";
	$mensagem.="</tr><tr>";
	$mensagem.="<td align='right'><b>Senha:</b></td><td> ".$dados['PES_SENHA']."</td>";
	$mensagem.="</tr>";
	$mensagem.="</table>";
	
	$email = mail($destino,$remetente,$mensagem,$headers);
	
	if($email){  
		echo " 
			<script>alert('Lembrete de senha enviado para ".$destino.".');</script>
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://www.abla.com.br/'>
		";
	}else{
		echo "
			<script>alert('Erro ao enviar Lembrete de senha por E-mail');</script>
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../lembrarSenha.php'>
		";
	}
		
}

?>