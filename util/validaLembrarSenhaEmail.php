<?php

require_once('ConnectionFactory.class.php'); 
require_once('../control/PessoaFisicaControl.php');

//Formulario
$pes_email1 = $_POST['PES_EMAIL1'];

$pessoaFisicaDao = new PessoaFisicaDao();
$dados = $pessoaFisicaDao->verDadosLembrarSenhaEmail($pes_email1);

if(!$dados){
	echo "
		<script>alert('E-mail não encontrado.');</script>
		<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../lembrarSenha.php'>
	";
}else{	
	//Envio de email com senha
	$destino = $pes_email1;
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
	$mensagem.="<td align='right'><b>Email:</b></td><td> ".$dados['PES_EMAIL1']."</td>";
	$mensagem.="</tr><tr>";
	$mensagem.="<td align='right'><b>Senha:</b></td><td> ".$dados."</td>";
	$mensagem.="</tr>";
	$mensagem.="</table>";
	
	$email = mail($destino,$remetente,$mensagem,$headers);
	
	if($email){
		echo "
			<script>alert('Lembrete de senha enviado por E-mail.');</script>
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://www.abla.com.br/'>
		";
	}else{
		echo "
			<script>alert('Erro ao enviar Lembrete de senha por E-mail');</script>
			<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../lembrarSenhaPF.php'>
		";
	}
		
}

?>
