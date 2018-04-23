<?php		  

class TelefoniaDao {

	

	function listaTelefonia() {

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			

			$sql = "SELECT * FROM telefonia ORDER BY TEL_ID ASC ";	

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		}catch ( PDOException $ex ){

			 echo "Erro: ".$ex->getMessage(); 

		}

	}

}

?>