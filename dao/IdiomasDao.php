<?php		  

class IdiomasDao {

	

	function listaIdiomas() {

			

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM idiomas ORDER BY IDIOMA_ID ASC";	

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		}catch ( PDOException $ex ){

			 echo "Erro: ".$ex->getMessage(); 

		}

	}

}

?>