<?php
	require_once('entidade/Estado.class.php');
	require_once('util/ConnectionFactory.class.php'); 
	require_once('util/ServiceDB.php');
	
	class EstadoDao {
				
				
		function listaEstado() {
			
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "SELECT * FROM estado ORDER BY nomeEstado ASC";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
								
				return $query;
				
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage(); 
			}
		}
								
	}
?>

