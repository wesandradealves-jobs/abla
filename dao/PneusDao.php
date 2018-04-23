<?php		  

class PneusDao {

	

	function listaPneus() {

	

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM pneus ORDER BY PNEU_ID ASC";	

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		}catch ( PDOException $ex ){

			 echo "Erro: ".$ex->getMessage(); 

		}

	}

}

?>