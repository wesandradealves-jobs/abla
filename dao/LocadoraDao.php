<?php
	
	class LocadoraDao {

		function buscarDados($id_locadora) {
		require_once ('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
			
		session_start();
		$_SESSION['id_locadora'] = "";
	
		try{
			$sql = "SELECT * FROM locadoras WHERE id_locadora = '$id_locadora' ORDER BY ds_locadora LIMIT 1";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			
				$linha= $servicedb->NumRows($query);
														
				if($linha){
				
					while($linha = mysql_fetch_object($query)){
						
						$_SESSION['id_locadora'] = $linha->id_locadora;
						$_SESSION['ds_locadora'] = $linha->ds_locadora;
						}
					return "alterarLocadora";
					
				}else{
					return null;
				}
				
			
		}catch ( PDOException $ex ){
			 echo "Erro: ".$ex->getMessage(); 
		}
	}		

		public function verDados($id_locadora){
		require_once('util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
		try{
			$sql = "SELECT * FROM locadoras WHERE `id_locadora` = '$id_locadora' LIMIT 1";
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			$row = mysql_fetch_assoc($query);
			return $row;	
		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
	}
		
		public function criaLocadoras($id_locadora,$ds_locadora, $DS_ENDERECO, $DS_COMPLEMENTO, $DS_NUMERO, $DS_BAIRRO, $NR_CEP,$DS_OBS,
	 $cidade, $DS_DDD_TELEFONE, $DS_TELEFONE, $DS_DDD_TELEFONE2, $DS_TELEFONE2, $DS_DDD_FAX,
	$DS_FAX, $DS_EMAIL, $DS_SITE, $DS_SKYPE, $ID_STATUS, $acao) {

		require_once ('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory :: singleton();
		try {
			if($acao == 'insert'){
			$sql = "INSERT INTO locadoras (
													ds_locadora, 
													DS_ENDERECO, 
													DS_COMPLEMENTO, 
													DS_NUMERO, 
													DS_BAIRRO, 
													NR_CEP,
													DS_OBS,
													id_cidade, 
													DS_DDD_TELEFONE, 
													DS_TELEFONE, 
													DS_DDD_TELEFONE2, 
													DS_TELEFONE2, 
													DS_DDD_FAX,
													DS_FAX, 
													DS_EMAIL, 
													DS_SITE,
													DS_SKYPE, 
													ID_STATUS,
													DT_ATUALIZACAO
													)values(
													'$ds_locadora',
													'$DS_ENDERECO', 
													'$DS_COMPLEMENTO', 
													'$DS_NUMERO', 
													'$DS_BAIRRO', 
													'$NR_CEP',
													'$DS_OBS',
													'$cidade', 
													'$DS_DDD_TELEFONE', 
													'$DS_TELEFONE', 
													'$DS_DDD_TELEFONE2', 
													'$DS_TELEFONE2', 
													'$DS_DDD_FAX',
													'$DS_FAX', 
													'$DS_EMAIL', 
													'$DS_SITE',
													'$DS_SKYPE', 
													'$ID_STATUS',
													now()
													)";
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
				if($query){
					return true;
				}else{
					return "Erro ao realizar cadastro.";
				}
			
			}else{
			//$id_locadora = $_SESSION['id_locadora'];
				$sql = "UPDATE locadoras SET
									ds_locadora = '$ds_locadora', 
									DS_ENDERECO = '$DS_ENDERECO',
									DS_COMPLEMENTO = '$DS_COMPLEMENTO', 
									DS_NUMERO = '$DS_NUMERO',
									DS_BAIRRO = '$DS_BAIRRO',
									NR_CEP = '$NR_CEP', 
									DS_OBS = '$DS_OBS', 
									id_cidade = '$cidade',
									DS_DDD_TELEFONE = '$DS_DDD_TELEFONE',
									DS_TELEFONE = '$DS_TELEFONE',
									DS_DDD_TELEFONE2 = '$DS_DDD_TELEFONE2',
									DS_TELEFONE2 = '$DS_TELEFONE',	
									DS_DDD_FAX = '$DS_DDD_FAX',	 
									DS_FAX = '$DS_FAX',
									DS_EMAIL = '$DS_EMAIL',
									DS_SITE = '$DS_SITE',
									ID_STATUS = '$ID_STATUS',
									DT_ATUALIZACAO = now()
								WHERE id_locadora = '$id_locadora'
								";	
								
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
				if($query){
					return "Alteração realizada com sucesso.";
				}else{
					return "Erro ao realizar alteração.";
				}
				
			}

		}catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
	}	
		function listarLocadoras($cidade) {
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try
			{
				$sql = "SELECT `id_locadora`,`ds_locadora` , `cidade` , `sigla` FROM `locadoras` , `cidade` , `estado` WHERE `id_cidade` =$cidade AND cidade.id = id_cidade AND cidade.estado = estado.id AND ID_STATUS = 1 ORDER BY RAND()";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				return $query;
			}
			catch (PDOException $ex) {
				 echo "Erro: ".$ex->getMessage();
			}
		}
		function infoLocadora($id)
		{
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			try
			{
				$sql = "SELECT * FROM `locadoras` WHERE `id_locadora` = $id";
				$query = $servicedb->ExecutarSQL($sql,$cf->conn);
				return $query;
			}
			catch (PDOException $ex)
			{
				echo "Erro: ".$ex->getMessage();
			}
		}
	}
?>
