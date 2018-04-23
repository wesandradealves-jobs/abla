<?php
	error_reporting(E_ALL);
	require_once("ConnectionFactory.class.php"); 
	require_once("ServiceDB.php");
	require_once('../entidade/Estado.class.php');
	require_once('../entidade/Cidade.class.php');
	require_once('../dao/EstadoCarroDao.php');
	require_once('../dao/CidadeCarroDao.php');
	require_once('../dao/LocadoraDao.php');
	require_once('../dao/VeiculoDao.php');
	extract($_POST);
	
	if ($objeto == "estado")
	{
		$estado = new EstadoCarroDao();
		$objEstado = $estado->listaEstado();
		echo "<option  value='2'></option>";
		while ($linha = mysql_fetch_array($objEstado)) 
			echo "<option value=".$linha['id'].">".$linha['sigla']."</option>";
	}
	if ($objeto == "cidade")
	{
		$cidade = new CidadeCarroDao();
		$objCidade = $cidade->listarCidades($estado);
		
		while ($linha = mysql_fetch_array($objCidade)) 
		{
			echo "<option value=".$linha['id'].">".$linha['sigla']."</option>";
		}
	}
	if ($objeto == "locadora")
	{
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