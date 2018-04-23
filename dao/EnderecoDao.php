<?php		  

class EnderecoDao {

			

	public function criaEnderecoPF($pes_cpf,$lograd_resid, $num_resid, $compl_resid, $bairro_resid,$cidade_resid,$cep_resid){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO endereco(PES_CPF,LOGRAD_RESID, NUM_RESID, COMPL_RESID, BAIRRO_RESID, CIDADE_RESID, CEP_RESID) 

					VALUES('$pes_cpf','$lograd_resid', '$num_resid', '$compl_resid', '$bairro_resid','$cidade_resid','$cep_resid')";

							

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return mysql_insert_id();



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}



	//ver ENDEREÇO por CPF

	public function verEnd($cpf){

			require_once('util/ServiceDB.php');

			$servicedb = new ServiceDB();

			$cf = ConnectionFactory::singleton();

			try{

				$sql = "SELECT * FROM endereco WHERE PES_CPF = '$cpf' LIMIT 1";

				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				$row = mysql_fetch_assoc($query);

				return $row;

			} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

	public function buscarEndPJ($cnpj){
			require_once('util/ServiceDB.php');
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			try{
				$sql = "SELECT * FROM endereco WHERE PES_CNPJ = '$cnpj' LIMIT 1";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				$row = mysql_fetch_assoc($query);
				return $row;
			} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
	}		

	public function limpaEnderecoPF($pes_cpf){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM endereco WHERE PES_CPF = '$pes_cpf'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	//PESSOA JURIDICA



	//VER ENDEREÇO POR CNPJ

	public function verEndPJ($cnpj){

			require_once('util/ServiceDB.php');

			$servicedb = new ServiceDB();

			$cf = ConnectionFactory::singleton();

			try{

				$sql = "SELECT * FROM endereco WHERE PES_CNPJ = '$cnpj' LIMIT 1";

				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				$row = mysql_fetch_assoc($query);

				return $row;

			} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }

	}

	

	public function criaEnderecoPJ($pes_cnpj,$lograd_com,$num_com,$compl_com,$bairro_com,$cep_com,$cidade,$lograd_corresp,$num_corresp,$compl_corresp,$bairro_corresp,$cep_corresp){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "INSERT INTO endereco(PES_CNPJ, LOGRAD_COM, NUM_COM, COMPL_COM, BAIRRO_COM, CEP_COM, cidade,

										LOGRAD_CORRESP, NUM_CORRESP, COMPL_CORRESP, BAIRRO_CORRESP, CEP_CORRESP) 

								  VALUES('$pes_cnpj','$lograd_com','$num_com','$compl_com','$bairro_com','$cep_com','$cidade',

										'$lograd_corresp','$num_corresp','$compl_corresp','$bairro_corresp','$cep_corresp')";

							

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);

			if($query){

				return "Endereço inserido com sucesso.";

			}else{

				return "Erro ao inserir Endereço.";

			}

		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

			

	public function limpaEnderecoPJ($pes_cnpj){

		

		require_once('../util/ServiceDB.php');

		$servicedb = new ServiceDB();

		$cf = ConnectionFactory::singleton();

		

		try{

			$sql = "DELETE FROM endereco WHERE PES_CNPJ = '$pes_cnpj'";

	

			$query = $servicedb->ExecutarSQL($sql, $cf->conn);



			return $query;



		}catch ( PDOException $ex ){ 

			echo "Erro: ".$ex->getMessage(); 

		}	

	}

}

?>