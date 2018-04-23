<?php	

	require_once('ConnectionFactory.class.php'); 

	require_once("../dao/CidadeDao.php");

	require_once('ServiceDB.php');

	extract($_POST);

		  

	if($paramTipo == 1){		

		$cidadeDao=new CidadeDao();

		$cidadeDao->listarCidades($paramEstado);		

	}

	  

?>

