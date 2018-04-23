<?php	
	class EstadoCarroDao
	{
		function listaEstado()
		{
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try
			{
				$sql = "SELECT * FROM estado ORDER BY nomeEstado ASC";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				return $query;
				
			}
			catch (PDOException $ex) { echo "Erro: ".$ex->getMessage(); }
		}
		function listaEstadoVeiculos()
		{
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try
			{
				$sql = "SELECT estado.id, estado.nomeEstado, estado.sigla FROM cidade INNER JOIN estado ON (cidade.estado = estado.id) INNER JOIN locadoras ON (cidade.id = locadoras.id_cidade) INNER JOIN veiculo ON (locadoras.id_locadora = veiculo.id_locadora)
WHERE  id_tipo_veiculo = 2
GROUP BY estado.id";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				return $query;
				
			}
			catch (PDOException $ex) { echo "Erro: ".$ex->getMessage(); }
		}

	}
?>
