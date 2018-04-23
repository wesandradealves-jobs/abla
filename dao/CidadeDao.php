<?php	  
	class CidadeDao {
		
		function listarCidades($estado) {
		
			require_once('../util/ServiceDB.php');
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "select cidade.id, cidade.cidade, cidade.estado from cidade, locadoras where estado='$estado' and cidade.id=locadoras.id_cidade and ID_STATUS = 1 group by cidade.cidade ORDER by cidade ASC";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
				$valorAAsignar = "<select name='cidade' ><option value='0'>---------</option>";
									
				while($linha = mysql_fetch_array($query)){
					$valorAAsignar .= "<option value=".$linha['id'].">".$linha['cidade']."</option>";				
				}
								
				echo $valorAAsignar;
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage();
				 
			}
		}

		function listarCidadesVeiculo($estado) {
		
			require_once('../util/ServiceDB.php');
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "select cidade.id, cidade.cidade, cidade.estado from cidade, locadoras, veiculo where estado='$estado' and cidade.id=locadoras.id_cidade and id_tipo_veiculo = 2 group by cidade.cidade ORDER by cidade ASC";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
				$valorAAsignar = "<select name='cidade' ><option value='0'>---------</option>";
									
				while($linha = mysql_fetch_array($query)){
					$valorAAsignar .= "<option value=".$linha['id'].">".$linha['cidade']."</option>";				
				}
								
				echo $valorAAsignar;
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage();
				 
			}
		}

		
		function verCidade($id) {
		
			require_once('util/ServiceDB.php');
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "select * from cidade where id='$id' LIMIT 1";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				$linha = mysql_fetch_array($query);
				return $linha;
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage();
			}
		}

	}
?>
