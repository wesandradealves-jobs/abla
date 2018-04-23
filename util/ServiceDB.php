<?php



/***********************************************************************

 * Classe:  Connect.php

 * Objetivo: Definir a Classe DataBase

 ***********************************************************************/



class ServiceDB

{



	public function ExecutarSQL($sql, $conn)

	{	

		$query = mssql_query($sql, $conn);

		return($query);

	}





	public function NumRows($query)

	{

		return(mssql_num_rows($query));

	}



	

	public function Result($query, $posicao, $campo)

	{

		return(mssql_result($query, $posicao, $campo));

	}



}



?>

