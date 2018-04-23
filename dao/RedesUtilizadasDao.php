<?php		  

class RedesUtilizadasDao {

			

	public function criaRedesUtilizadas($pes_cpf,$rede,$tipo){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO redes_utilizadas(PES_CPF,REDE_ID,TIPO_USO) 

					VALUES('$pes_cpf','$rede','$tipo')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaRedesUtilizadas($pes_cpf,$tipo){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM redes_utilizadas WHERE PES_CPF = '$pes_cpf' AND TIPO_USO = '$tipo'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Redes Sociais Utilizadas por CPF

	public function verRedesUtilizadas($cpf,$tipo){

	

		require_once('util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "SELECT * FROM redes_utilizadas WHERE PES_CPF = '$cpf' AND TIPO_USO = '$tipo'";

			

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			

			return $query;

			

		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

}

?>