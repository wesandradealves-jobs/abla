<?php
	class VeiculoDao
	{
		public function criaVeiculo($ds_veiculo,$ds_tipo, $id_locadora) {

		require_once ('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory :: singleton();
		try {
			$sql = "INSERT INTO veiculo (
													ds_veiculo,
													id_tipo_veiculo,
													id_locadora
													
												)values(
														'$ds_veiculo',
														'$ds_tipo',
														'$id_locadora'
														
													)";
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
		} catch (PDOException $ex) {
			echo "Erro: " . $ex->getMessage();
		}
	}

		function listarTipos()
		{
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();

			try {
				$sql = "SELECT * FROM `tipoveiculo` WHERE`id` = 2";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				return $query;
			}
			catch (PDOException $ex) { echo "Erro: ".$ex->getMessage(); }
		}
		function listarVeiculoPorTipo($estado_veiculo,$cidade,$tipo)
		{
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();

			try {
				$sql = "SELECT * FROM cidade,estado,veiculo,locadoras WHERE
				locadoras.id_locadora = veiculo.id_locadora AND locadoras.id_cidade = $cidade AND cidade.id = $cidade AND estado.id = $estado_veiculo AND id_tipo_veiculo = 2 ORDER BY RAND()";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
				return $query;
			}
			catch (PDOException $ex) { echo "Erro: ".$ex->getMessage(); }
		}
	}
?>
