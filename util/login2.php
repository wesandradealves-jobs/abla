<?php

	$ds_login = $_POST['ds_login'];
	$ds_senha = $_POST['ds_senha'];

$xml = simplexml_load_file('http://187.11.238.201/webservice/auth.asp?lg=' . $ds_login . '&pw=' . $ds_senha,"SimpleXMLElement",LIBXML_NOCDATA);

if ($xml) {


$EmpCgc = $xml->cliente->EmpCgc;
$EmpRaz = $xml->cliente->EmpRaz;
$EmpEmaCom = $xml->cliente->EmpEmaCom;
$EmpFil = $xml->cliente->EmpFil;
$EmpAti = $xml->cliente->EmpAti;


$EmpCgc1 = trim($EmpCgc);


setcookie("cookie-id", $EmpCgc1, time()+3600, "/privado", "abla.com.br", 0);
setcookie("cookie-login", $EmpCgc1, time()+3600, "/privado", "abla.com.br", 0);
setcookie("cookie-locadora", $EmpRaz, time()+3600, "/privado", "abla.com.br", 0);
setcookie("cookie-ativa", $EmpAti, time()+3600, "/privado", "abla.com.br", 0);
setcookie("cookie-filiada", $EmpFil, time()+3600, "/privado", "abla.com.br", 0);



} else {
    $error = "Could not load intro XML file.";
}
	

	if( $EmpAti == 'S' && $EmpFil == 'FIL' || $EmpFil == 'SUS'){		
		header("Location: http://abla.com.br/privado/?page_id=26632");
	}else{?>
				
		<script> alert("Login ou senha incorreto.");
		window.location="http://www.abla.com.br/?p=21903";
		</script> 
<?php
	}					
		
?> 
