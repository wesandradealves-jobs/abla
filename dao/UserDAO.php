<?php
	session_start();		
		
	class UserDao {
				
				
		function logar($ds_login, $ds_senha) {
			
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
				
						
			try{
				$sql = "SELECT * FROM usuario WHERE DS_LOGIN='$ds_login' and DS_SENHA='$ds_senha'";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				
				$linha= $servicedb->NumRows($query);
															
				if($linha){
				
					while($linha = mysql_fetch_object($query)){
					
						$_SESSION['nome'] = $linha->NM_USUARIO;
						
						return $linha->NM_USUARIO; 										
					}											
				}					
				
			}catch ( PDOException $ex ){
				 echo "Erro: ".$ex->getMessage(); 
			}
			
			return null;
		}								
	}				
?>
