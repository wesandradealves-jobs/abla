<?php		  

class ComputadorUtilizadoDao {

			

	public function criaComputadorUtilizado($pes_cnpj,$comp){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO computador_utilizado(PES_CNPJ,COMP_ID) 

					VALUES('$pes_cnpj','$comp')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaComputadorUtilizado($pes_cnpj){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM computador_utilizado WHERE PES_CNPJ = '$pes_cnpj'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Computadores Utilizados por CNPJ

	public function verComputadorUtilizado($pes_cnpj){

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM computador_utilizado WHERE PES_CNPJ = '$pes_cnpj'";

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

}

?>