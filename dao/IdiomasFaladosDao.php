<?php		  

class IdiomasFaladosDao {

			

	public function criaIdiomasFalados($pes_cpf,$idioma){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO idiomas_falados(PES_CPF,IDIOMA_ID) 

					VALUES('$pes_cpf','$idioma')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver Idiomas Falados por CPF

	public function verIdiomasFalados($cpf){

			require_once('util/ServiceDB.php');

			$servicedb = new ServiceDB();

			$cf = ConnectionFactory::singleton();

			try{

				$sql = "SELECT * FROM idiomas_falados WHERE PES_CPF = '$cpf'";

				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				

				$idiomas = array();

				while ($row = mysql_fetch_assoc($query)) {

					array_push($idiomas, $row['IDIOMA_ID']);

				}

				

				return $idiomas;

			} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

			

	public function limpaIdiomasFalados($pes_cpf){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM idiomas_falados WHERE PES_CPF = '$pes_cpf'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

}

?>