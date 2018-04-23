<?php		  

class PneusUtilizadosDao {

			

	public function criaPneusUtilizados($pes_cnpj,$pneu){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO pneus_utilizados(PES_CNPJ,PNEU_ID) 

					VALUES('$pes_cnpj','$pneu')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaPneusUtilizados($pes_cnpj){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM pneus_utilizados WHERE PES_CNPJ = '$pes_cnpj'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Pneus Utilizados por CNPJ

	public function verPneusUtilizados($pes_cnpj){

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM pneus_utilizados WHERE PES_CNPJ = '$pes_cnpj'";

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

}

?>