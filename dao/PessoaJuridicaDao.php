<?php

class PessoaJuridicaDao{

	public function verDados($cnpj){
		require_once('util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
		try{
			$sql = "SELECT * FROM pessoa_juridica WHERE `PES_CNPJ` = '$cnpj' LIMIT 1";
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			$row = mysql_fetch_assoc($query);
			return $row;	
		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
	}

	public function criaPessoaJuridica($imagem_dir,$acao,$pes_nome_fant,$pes_razao_soc,$pes_cnpj,$pes_insc_est,$pes_insc_mun,$pes_data_fund, $pes_contato, $pes_tel1,$pes_tel2,$pes_fax,$pes_cel1,
										$pes_cel2,$pes_site,$pes_email1, $pes_email2, $pes_franq,$pes_franquia,$pes_matriz,$pes_filial,$pes_nm_emp,$pes_anos_setor,
										$pes_ano_filiacao_abla,$pes_ano_filiacao_sindloc,$pes_terc_frota,$pes_lazer,$pes_coorp,$pes_nm_lojas_aeroporto,$pes_nm_lojas_outros,
										$pes_nm_veic_passeio,$pes_nm_veic_util,$pes_nm_veic_espc,$pes_dir,$pes_ger_finan,$pes_ger_comer,$pes_ger_adm_oper,$pes_assist_finan,
										$pes_assist_adm,$pes_sup_atend,$pes_oper,$pes_oper_telem,$pes_agen_serv,$pes_chefe_frota,$pes_coord_mot,$pes_mot,$pes_chefe_manut,
										$pes_lav_veic,$banda_mb,$banda_gb,$nm_emp_prov_int,$tipo_plano_cel,$pes_associada, $pes_senha, $pes_status){
			
			require_once('../util/ServiceDB.php');
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{				
				if($acao == 'insert'){
				session_start();
				$imagem_dir = $_SESSION['pes_foto_nome'];
					$sql = "INSERT INTO pessoa_juridica (
											PES_FOTO,PES_NOME_FANT,PES_RAZAO_SOC,PES_CNPJ,PES_INSC_EST,PES_INSC_MUN,PES_DATA_FUND,PES_CONTATO, PES_TEL1,PES_TEL2,PES_FAX,PES_CEL1,PES_CEL2,PES_SITE,
											PES_EMAIL1,PES_EMAIL2,PES_FRANQ,PES_FRANQUIA,PES_MATRIZ,PES_FILIAL,PES_NM_EMP,PES_ANOS_SETOR,PES_ANO_FILIACAO_ABLA,
											PES_ANO_FILIACAO_SINDLOC,PES_TERC_FROTA,PES_LAZER,PES_COORP,PES_NM_LOJAS_AEROPORTO,PES_NM_LOJAS_OUTROS,PES_NM_VEIC_PASSEIO,
											PES_NM_VEIC_UTIL,PES_NM_VEIC_ESPEC,PES_DIR,PES_GER_FINAN,PES_GER_COMER,PES_GER_ADM_OPER,PES_ASSIST_FINAN,PES_ASSIST_ADM,
											PES_SUP_ATEND,PES_OPER,PES_OPER_TELEM,PES_AGEN_SERV,PES_CHEFE_FROTA,PES_COORD_MOT,PES_MOT,PES_CHEFE_MANUT,PES_LAV_VEIC,
											BANDA_MB,BANDA_GB,NM_EMP_PROV_INT,TIPO_PLANO_CEL,PES_ASSOCIADA, PES_SENHA, PES_ID_STATUS ,PES_DATA_CADASTRO
										)values(
											'$imagem_dir','$pes_nome_fant','$pes_razao_soc','$pes_cnpj','$pes_insc_est','$pes_insc_mun','$pes_data_fund','$pes_contato','$pes_tel1','$pes_tel2','$pes_fax',
											'$pes_cel1','$pes_cel2','$pes_site','$pes_email1', '$pes_email2','$pes_franq','$pes_franquia','$pes_matriz','$pes_filial',
											'$pes_nm_emp','$pes_anos_setor','$pes_ano_filiacao_abla','$pes_ano_filiacao_sindloc','$pes_terc_frota','$pes_lazer','$pes_coorp',
											'$pes_nm_lojas_aeroporto','$pes_nm_lojas_outros','$pes_nm_veic_passeio','$pes_nm_veic_util','$pes_nm_veic_espc','$pes_dir',
											'$pes_ger_finan','$pes_ger_comer','$pes_ger_adm_oper','$pes_assist_finan','$pes_assist_adm','$pes_sup_atend','$pes_oper',
											'$pes_oper_telem','$pes_agen_serv','$pes_chefe_frota','$pes_coord_mot','$pes_mot','$pes_chefe_manut','$pes_lav_veic',
											'$banda_mb','$banda_gb','$nm_emp_prov_int','$tipo_plano_cel','$pes_associada', '$pes_senha','$pes_status',now()
										)";	
										//echo $sql;
						$query = $servicedb->ExecutarSQL($sql, $cf->conn);
						
						if($query){
							return true;
						}else{
							return "Erro ao realizar cadastro.";
						}
					
					}else{
					
						$sql = "UPDATE pessoa_juridica SET
											PES_NOME_FANT = '$pes_nome_fant',PES_RAZAO_SOC = '$pes_razao_soc',PES_CNPJ = '$pes_cnpj',PES_INSC_EST = '$pes_insc_est',
											PES_INSC_MUN = '$pes_insc_mun',PES_DATA_FUND = '$pes_data_fund',PES_CONTATO = '$pes_contato',PES_TEL1 = '$pes_tel1',PES_TEL2 = '$pes_tel2',PES_FAX = '$pes_fax',
											PES_CEL1 = '$pes_cel1',PES_CEL2 = '$pes_cel2',PES_SITE = '$pes_site',PES_EMAIL1 = '$pes_email1', PES_EMAIL2 = '$pes_email2',
											PES_FRANQ = '$pes_franq',PES_FRANQUIA = '$pes_franquia',PES_MATRIZ = '$pes_matriz',PES_FILIAL = '$pes_filial',
											PES_NM_EMP = '$pes_nm_emp',PES_ANOS_SETOR = '$pes_anos_setor',PES_ANO_FILIACAO_ABLA = '$pes_ano_filiacao_abla',
											PES_ANO_FILIACAO_SINDLOC = '$pes_ano_filiacao_sindloc',PES_TERC_FROTA = '$pes_terc_frota',PES_LAZER = '$pes_lazer',
											PES_COORP = '$pes_coorp',PES_NM_LOJAS_AEROPORTO = '$pes_nm_lojas_aeroporto',PES_NM_LOJAS_OUTROS = '$pes_nm_lojas_outros',
											PES_NM_VEIC_PASSEIO = '$pes_nm_veic_passeio',PES_NM_VEIC_UTIL = '$pes_nm_veic_util',PES_NM_VEIC_ESPEC = '$pes_nm_veic_espc',
											PES_DIR = '$pes_dir',PES_GER_FINAN = '$pes_ger_finan',PES_GER_COMER = '$pes_ger_comer',PES_GER_ADM_OPER = '$pes_ger_adm_oper',
											PES_ASSIST_FINAN = '$pes_assist_finan',PES_ASSIST_ADM = '$pes_assist_adm',PES_SUP_ATEND = '$pes_sup_atend',PES_OPER = '$pes_oper',
											PES_OPER_TELEM = '$pes_oper_telem',PES_AGEN_SERV = '$pes_agen_serv',PES_CHEFE_FROTA = '$pes_chefe_frota',PES_COORD_MOT = '$pes_coord_mot',
											PES_MOT = '$pes_mot',PES_CHEFE_MANUT = '$pes_chefe_manut',PES_LAV_VEIC = '$pes_lav_veic',BANDA_MB = '$banda_mb',BANDA_GB = '$banda_gb',
											NM_EMP_PROV_INT = '$nm_emp_prov_int',TIPO_PLANO_CEL = '$tipo_plano_cel',PES_ASSOCIADA = '$pes_associada', PES_SENHA = '$pes_senha', PES_ID_STATUS = '$pes_status'
									WHERE PES_CNPJ = '$pes_cnpj'
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
public function alterarPessoaJuridica($imagem_dir,$acao,$pes_nome_fant,$pes_razao_soc,$pes_cnpj,$pes_insc_est,$pes_insc_mun,$pes_data_fund,$pes_contato, $pes_tel1,$pes_tel2,$pes_fax,$pes_cel1,
												$pes_cel2,$pes_site,$pes_email1, $pes_email2,$pes_franq,$pes_franquia,$pes_matriz,$pes_filial,$pes_nm_emp,$pes_anos_setor,
												$pes_ano_filiacao_abla,$pes_ano_filiacao_sindloc,$pes_terc_frota,$pes_lazer,$pes_coorp,$pes_nm_lojas_aeroporto,$pes_nm_lojas_outros,
												$pes_nm_veic_passeio,$pes_nm_veic_util,$pes_nm_veic_espc,$pes_dir,$pes_ger_finan,$pes_ger_comer,$pes_ger_adm_oper,$pes_assist_finan,
												$pes_assist_adm,$pes_sup_atend,$pes_oper,$pes_oper_telem,$pes_agen_serv,$pes_chefe_frota,$pes_coord_mot,$pes_mot,$pes_chefe_manut,
												$pes_lav_veic,$banda_mb,$banda_gb,$nm_emp_prov_int,$tipo_plano_cel,$pes_associada){
			
			require_once('../util/ServiceDB.php');
			$servicedb = new ServiceDB();
			$cf = ConnectionFactory::singleton();
			
			try{				
							session_start();
				$imagem_dir = $_SESSION['pes_foto_nome'];
					
										$sql = "UPDATE pessoa_juridica SET
											PES_NOME_FANT = '$pes_nome_fant',PES_RAZAO_SOC = '$pes_razao_soc',PES_CNPJ = '$pes_cnpj',PES_INSC_EST = '$pes_insc_est',
											PES_INSC_MUN = '$pes_insc_mun',PES_DATA_FUND = '$pes_data_fund',PES_CONTATO = '$pes_contato',PES_TEL1 = '$pes_tel1',PES_TEL2 = '$pes_tel2',PES_FAX = '$pes_fax',
											PES_CEL1 = '$pes_cel1',PES_CEL2 = '$pes_cel2',PES_SITE = '$pes_site',PES_EMAIL1 = '$pes_email1', PES_EMAIL2 = '$pes_email2',
											PES_FRANQ = '$pes_franq',PES_FRANQUIA = '$pes_franquia',PES_MATRIZ = '$pes_matriz',PES_FILIAL = '$pes_filial',
											PES_NM_EMP = '$pes_nm_emp',PES_ANOS_SETOR = '$pes_anos_setor',PES_ANO_FILIACAO_ABLA = '$pes_ano_filiacao_abla',
											PES_ANO_FILIACAO_SINDLOC = '$pes_ano_filiacao_sindloc',PES_TERC_FROTA = '$pes_terc_frota',PES_LAZER = '$pes_lazer',
											PES_COORP = '$pes_coorp',PES_NM_LOJAS_AEROPORTO = '$pes_nm_lojas_aeroporto',PES_NM_LOJAS_OUTROS = '$pes_nm_lojas_outros',
											PES_NM_VEIC_PASSEIO = '$pes_nm_veic_passeio',PES_NM_VEIC_UTIL = '$pes_nm_veic_util',PES_NM_VEIC_ESPEC = '$pes_nm_veic_espc',
											PES_DIR = '$pes_dir',PES_GER_FINAN = '$pes_ger_finan',PES_GER_COMER = '$pes_ger_comer',PES_GER_ADM_OPER = '$pes_ger_adm_oper',
											PES_ASSIST_FINAN = '$pes_assist_finan',PES_ASSIST_ADM = '$pes_assist_adm',PES_SUP_ATEND = '$pes_sup_atend',PES_OPER = '$pes_oper',
											PES_OPER_TELEM = '$pes_oper_telem',PES_AGEN_SERV = '$pes_agen_serv',PES_CHEFE_FROTA = '$pes_chefe_frota',PES_COORD_MOT = '$pes_coord_mot',
											PES_MOT = '$pes_mot',PES_CHEFE_MANUT = '$pes_chefe_manut',PES_LAV_VEIC = '$pes_lav_veic',BANDA_MB = '$banda_mb',BANDA_GB = '$banda_gb',
											NM_EMP_PROV_INT = '$nm_emp_prov_int',TIPO_PLANO_CEL = '$tipo_plano_cel',PES_ASSOCIADA = '$pes_associada'
									WHERE PES_CNPJ = '$pes_cnpj'
									";						$query = $servicedb->ExecutarSQL($sql, $cf->conn);
						
						if($query){
							return "Alteração realizada com sucesso.";
						}else{
							return "Erro ao realizar alteração.";
						}
						
					
					
						

				}catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
		}	
	
	

	public function alteraSenha($pes_cnpj, $pes_email1, $pes_senha){
			
		require_once('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
		
		try{	
			$sql = "UPDATE pessoa_juridica SET 
						PES_SENHA = '$pes_senha'
					WHERE PES_CNPJ = '$pes_cnpj' AND
						PES_EMAIL1 = '$pes_email1'
					";	
							
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			
			if($query){
				return "Alteração de senha realizada com sucesso.";
			}else{
				return "Erro ao realizar alteração de senha.";
			}
		}catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
	}
	//busca os dados pelo cnpj
	function buscarDados($pes_cnpj) {
		require_once('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
			
		session_start();
		$_SESSION['id'] = "";
		$_SESSION['nome'] = "";
		$_SESSION['id_status'] = "";
		try{
			$sql = "SELECT * FROM pessoa_juridica WHERE PES_CNPJ = '$pes_cnpj' ORDER BY PES_NOME LIMIT 1";
				$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			
				$linha= $servicedb->NumRows($query);
														
				if($linha){
				
					while($linha = mysql_fetch_object($query)){
						
						$_SESSION['id'] = $linha->PES_CNPJ;
						$_SESSION['nome'] = $linha->PES_RAZAO_SOC;
						$_SESSION['id_status'] = $linha->PES_ID_STATUS;

						$nome_locadora = $linha->PES_RAZAO_SOC;
						setcookie("cookie-locadora", $nome_locadora, time()+3600, "/privado", "abla.com.br", 0);

						setcookie("email", $_SESSION['id'], time() - 3600, "/", "localhost");
					}
					return "alterarFormularioPJAdmin";
					
				}else{
					return null;
				}
				
			
		}catch ( PDOException $ex ){
			 echo "Erro: ".$ex->getMessage(); 
		}
	}
	//busca os dados pelo cnpj
	function buscarDadosNome($pes_nome) {
		require_once('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
			
		//session_start();
		$_SESSION['id'] = "";
		$_SESSION['nome'] = "";
		$_SESSION['id_status'] = "";
		try{
			$sql =mysql_query( "SELECT * FROM pessoa_juridica WHERE PES_RAZAO_SOC LIKE '%$pes_nome%' ORDER BY PES_NOME");
				return	$sql;						 
		}catch ( PDOException $ex ){
			 echo "Erro: ".$ex->getMessage(); 
		}
	}		
	/*public function buscarDadosNome($pes_nome){
		require_once('util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
		//session_start();
		$_SESSION['id'] = "";
		$_SESSION['nome'] = "";
		$_SESSION['id_status'] = "";
		try{
			$sql = "SELECT * FROM pessoa_juridica where PES_NOME_FANT = '$pes_nome'";
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			return $query;	
		} catch ( PDOException $ex ){ echo "Erro: ".$ex->getMessage(); }
	}	*/

	function remover($pesCnpj){
		require_once('../util/ServiceDB.php');
		$servicedb = new ServiceDB();
		$cf = ConnectionFactory::singleton();
		try{
			$sql = "DELETE FROM pessoa_juridica WHERE PES_CNPJ= '$pesCnpj';";	
//DELETE FROM endereco WHERE idEndereco= '$idEndereco';
			$query = $servicedb->ExecutarSQL($sql, $cf->conn);
			return $sql;					
		}catch ( PDOException $ex ){ 
			echo "Erro: ".$ex->getMessage(); 
		}	
	}
}
