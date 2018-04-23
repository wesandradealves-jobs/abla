<?php
	error_reporting(E_ALL);

	extract($_POST);
	

	$xml = simplexml_load_file('http://187.11.238.201/webservice/cidades_blind.asp');
	
	$arrEstado = array();
	$arrCidade = array();
	
	foreach($xml->cidade as $val) {
		
		$estadoKey = strval($val->EstCod);
		$arrEstado[] = $estadoKey;
		$arrCidade[$estadoKey][] = trim(strval($val->CidNom));
	}

	
	$arrEstado = array_unique($arrEstado);


	if ($objeto == "estado_veiculo")
	{

		echo '<option  value="0">__</option>';
		foreach($arrEstado as $val) {
		
		echo '<option value="' . $val .'">' . $val . '</option>';		
		}
	}

	if ($objeto == "cidade_veiculo")
	{
		
		for($i=0; $i < sizeof($arrCidade[$estado_veiculo]); $i++) {
		echo '<option value="' . $arrCidade[$estado_veiculo][$i] .'">' . $arrCidade[$estado_veiculo][$i] . '</option>';
		
		}

	}

	if ($objeto == "locadora")
	{
	echo "<tr>teste</tr>";
		$locadora = new LocadoraDao();
		$objLocadora = $locadora->listarLocadoras($cidade);
		while ($linha = mysql_fetch_array($objLocadora))
		{
			echo "<tr>";
			$link = "#";
			echo "<td><a href="."javascript:"."onclick=openPopup('locadorainfo.php?id=".$linha['id_locadora']."',350,400,'yes')".">".utf8_encode($linha['ds_locadora'])."</a></td>";
			echo "<td>".$linha['cidade']."</td>";
			echo "<td>".$linha['sigla']."</td>";
			echo "</tr>";
		}
	}
	
?>
<script type="text/javascript">
function openPopup(arquivo,largura,altura,scrol){calcleft=(screen.width*.5)-(largura*.5);calctop=(screen.height*.5)-(altura*.5);open(arquivo,"popup","status,width="
+ largura + ",height=" + altura + ",left=" + calcleft + ",top=" +
calctop + ",scrollbars=" + scrol)}
</script>