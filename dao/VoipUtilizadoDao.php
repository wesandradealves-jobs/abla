<?php		  

class VoipUtilizadoDao {

			

	public function criaVoipUtilizado($pes_cpf,$voip){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO voip_utilizado(PES_CPF,VOIP_ID) 

					VALUES('$pes_cpf','$voip')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaVoipUtilizado($pes_cpf){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM voip_utilizado WHERE PES_CPF = '$pes_cpf'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Voips Utilizados por CPF

	public function verVoipUtilizado($cpf){

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM voip_utilizado WHERE PES_CPF = '$cpf'";

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

}

?>