<?php
	require_once('util/ConnectionFactory.class.php'); 
	require_once('util/ServiceDB.php');
	
	class TipoVeiculoDao {
				
				
		function listaVeiculo() {
			
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "SELECT * FROM tipoveiculo ORDER BY ds_tipo_veiculo ASC";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
								
				return $query;
				
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage(); 
			}
		}
		
								
	}
?>