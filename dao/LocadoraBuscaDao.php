<?php
	require_once('entidade/Locadoras.class.php');
	require_once('util/ConnectionFactory.class.php'); 
	require_once('util/ServiceDB.php');
	
	class LocadoraBuscaDao {
				
				
		function listaLocadora() {
			
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "SELECT * FROM locadoras ORDER BY ds_locadora ASC";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
								
				return $query;
				
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage(); 
			}
		}
		
								
	}
?>