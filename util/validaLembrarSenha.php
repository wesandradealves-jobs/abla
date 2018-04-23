<?php

$pes_cnpj = $_GET['PES_CNPJ'];

error_reporting(E_ALL);


$xml = simplexml_load_file('http://187.11.238.201/webservice/lembrete_pw.asp?cnpj=' . $pes_cnpj,"SimpleXMLElement",LIBXML_NOCDATA);
if ($xml)

			{
				$email = $xml->cliente->ConEma;
				$senha = $xml->cliente->EmpFilSen; 
				

if(!xml){
	echo "
		<script>alert('E-mail não encontrado.');</script>
		<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../lembrarSenha.php'>
	";
}else{	
	//Envio de email com senha
	$destino = $email;
	$cliente = 'Abla';
	$remetente = 'abla@abla.com.br';
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
	$mensagem.="<td align='right'><b>Email:</b></td><td> ".$email."</td>";
	$mensagem.="</tr><tr>";
	$mensagem.="<td align='right'><b>Senha:</b></td><td> ".$senha."</td>";
	$mensagem.="</tr>";
	$mensagem.="</table>";
	
	$envio = mail($destino,$remetente,$mensagem,$headers, "-r".$remetente);

	
	if($envio){  
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
}
?>