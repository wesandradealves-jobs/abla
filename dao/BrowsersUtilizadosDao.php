<?php		  

class BrowsersUtilizadosDao {

			

	public function criaBrowsersUtilizados($pes_cpf,$brow){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO browser_utilizado(PES_CPF,BROW_ID) 

					VALUES('$pes_cpf','$brow')";

					

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaBrowsersUtilizados($pes_cpf){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM browser_utilizado WHERE PES_CPF = '$pes_cpf'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Browsers Utilizados por CPF

	public function verBrowsersUtilizados($cpf){

	

			require_once('util/ServiceDB.php');

			$servicedb = new ServiceDB();

			$cf = ConnectionFactory::singleton();

			try{

				$sql = "SELECT * FROM browser_utilizado WHERE PES_CPF = '$cpf'";

				

				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				

				return $query;

				

			} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

}

?>