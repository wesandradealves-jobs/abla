<?php		  

class CargoDao {

			

	public function criaCargo($pes_cpf,$cargo){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO cargo(PES_CPF,CARGO) 

					VALUES('$pes_cpf','$cargo')";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver CARGOS por CPF

	public function verCargo($cpf){

			require_once('util/ServiceDB.php');

			$servicedb = new ServiceDB();

			$cf = ConnectionFactory::singleton();

			try{

				$sql = "SELECT * FROM cargo WHERE PES_CPF = '$cpf'";

				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				

				$cagos = array();

				while ($row = mysql_fetch_assoc($query)) {

					array_push($cagos, $row['CARGO']);

				}

				

				return $cagos;

			} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

			

	public function limpaCargo($pes_cpf){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM cargo WHERE PES_CPF = '$pes_cpf'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

}

?>