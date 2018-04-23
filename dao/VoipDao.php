<?php		  

class VoipDao {

	

	function listaVoip() {

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM voip ORDER BY VOIP_ID ASC";	

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		}catch ( PDOException $ex ){

			 echo "Erro: ".$ex->getMessage(); 

		}

	}

}

?>