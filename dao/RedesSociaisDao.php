<?php		  

class RedesSociaisDao {

	

	function listaRedesSociais() {

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM redes_sociais ORDER BY REDE_ID ASC";	

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		}catch ( PDOException $ex ){

			 echo "Erro: ".$ex->getMessage(); 

		}

	}

}

?>