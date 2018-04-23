<?php
	  
	class CidadeCarroDao {
				
		function listarCidades($estado) {
		
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "select cidade.id, cidade.cidade, cidade.estado from cidade, locadoras where estado='$estado' and cidade.id=locadoras.id_cidade and ID_STATUS = 1 group by cidade.cidade ORDER by cidade ASC";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				$valorAAsignar = "";
									
				while($linha = mysql_fetch_array($query))
				{
					$valorAAsignar .= "<option value=".$linha['id'].">".$linha['cidade']."</option>";
				}

				echo $valorAAsignar;
			}
			catch (PDOException $ex) { echo "Erro: ".$ex->getMessage(); }
		}

		function listarCidadesVeiculos($estado_veiculo) {
		
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{
				$sql = "SELECT cidade.id, estado.nomeEstado, estado.sigla, cidade.cidade FROM cidade INNER JOIN estado ON (cidade.estado = estado.id) INNER JOIN locadoras ON (cidade.id = locadoras.id_cidade) INNER JOIN veiculo ON (locadoras.id_locadora = veiculo.id_locadora)
WHERE id_tipo_veiculo = 2 and estado='$estado_veiculo'
GROUP BY estado.id, cidade.cidade";	
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);

				$valorAAsignar = "";
									
				while($linha = mysql_fetch_array($query))
				{
					$valorAAsignar .= "<option value=".$linha['id'].">".$linha['cidade']."</option>";
				}

				echo $valorAAsignar;
			}
			catch (PDOException $ex) { echo "Erro: ".$ex->getMessage(); }
		}

	}
?>
