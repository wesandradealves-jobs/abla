<?php		  

class OperadoraUtilizadaDao {

			

	public function criaOperadoraUtilizada($pes_cnpj,$oper){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO operadora_utilizada(PES_CNPJ,OPER_ID) 

					VALUES('$pes_cnpj','$oper')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaOperadoraUtilizada($pes_cnpj){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM operadora_utilizada WHERE PES_CNPJ = '$pes_cnpj'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Computadores Utilizados por CNPJ

	public function verOperadoraUtilizada($pes_cnpj){

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM operadora_utilizada WHERE PES_CNPJ = '$pes_cnpj'";

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

}

?>