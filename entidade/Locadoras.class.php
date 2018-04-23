<?php

class Locadoras {
	private $ds_locadora;
	private $DS_ENDERECO;
	private $DS_COMPLEMENTO;
	private $DS_NUMERO;
	private $DS_BAIRRO;
	private $NR_CEP;
	private $cidade;
	private $DS_DDD_TELEFONE;
	private $DS_TELEFONE;
	private $DS_DDD_TELEFONE2;
	private $DS_TELEFONE2;
	private $DS_DDD_FAX;
	private $DS_FAX;
	private $DS_EMAIL;
	private $DS_SITE;
	private $DS_SKYPE;
	private $ID_STATUS;
	
	public function getDs_locadora() {
			return $this->ds_locadora;
		}
	public function setDs_locadora($ds_locadora) {
			$this->ds_locadora = $ds_locadora;
		}
	public function setDS_ENDERECO($DS_ENDERECO) {
  		 $this->DS_ENDERECO = $DS_ENDERECO;
	}

	public function getDS_ENDERECO() {
    	return $this->DS_ENDERECO;
	}
	
	public function setDS_COMPLEMENTO($DS_COMPLEMENTO) {
  		 $this->DS_COMPLEMENTO = $DS_COMPLEMENTO;
	}

	public function getDS_COMPLEMENTO() {
    	return $this->DS_COMPLEMENTO;
	}
	
	public function setDS_NUMERO($DS_NUMERO) {
  		 $this->DS_NUMERO = $DS_NUMERO;
	}

	public function getDS_NUMERO() {
    	return $this->DS_NUMERO;
	}
	
	public function setDS_BAIRRO($DS_BAIRRO) {
  		 $this->DS_BAIRRO = $DS_BAIRRO;
	}

	public function getDS_BAIRRO() {
    	return $this->DS_BAIRRO;
	}

	public function setNR_CEP($NR_CEP) {
  		 $this->NR_CEP = $NR_CEP;
	}

	public function getNR_CEP() {
    	return $this->NR_CEP;
	}
	
	public function setCidade($cidade) {
  		 $this->cidade = $cidade;
	}

	public function getCidade() {
    	return $this->cidade;
	}
	
	public function setDS_DDD_TELEFONE($DS_DDD_TELEFONE) {
  		 $this->DS_DDD_TELEFONE = $DS_DDD_TELEFONE;
	}

	public function getDS_DDD_TELEFONE() {
    	return $this->DS_DDD_TELEFONE;
	}
	
	public function setDS_TELEFONE($DS_TELEFONE) {
  		 $this->DS_TELEFONE = $DS_TELEFONE;
	}

	public function getDS_TELEFONE() {
    	return $this->DS_TELEFONE;
	}
	
	public function setDS_DDD_TELEFONE2($DS_DDD_TELEFONE2) {
  		 $this->DS_DDD_TELEFONE2 = $DS_DDD_TELEFONE2;
	}

	public function getDS_DDD_TELEFONE2() {
    	return $this->DS_DDD_TELEFONE2;
	}
	
	public function setDS_TELEFONE2($DS_TELEFONE2) {
  		 $this->DS_TELEFONE2 = $DS_TELEFONE2;
	}

	public function getDS_TELEFONE2() {
    	return $this->DS_TELEFONE2;
	}
	
	public function setDS_DDD_FAX($DS_DDD_FAX) {
  		 $this->DS_DDD_FAX = $DS_DDD_FAX;
	}

	public function getDS_DDD_FAX() {
    	return $this->DS_DDD_FAX;
	}
	
	public function setDS_FAX($DS_FAX) {
  		 $this->DS_FAX = $DS_FAX;
	}

	public function getDS_FAX() {
    	return $this->DS_FAX;
	}
	
	public function setDS_EMAIL($DS_EMAIL) {
  		 $this->DS_EMAIL = $DS_EMAIL;
	}

	public function getDS_EMAIL() {
    	return $this->DS_EMAIL;
	}
	
	public function setDS_SITE($DS_SITE) {
  		 $this->DS_SITE = $DS_SITE;
	}

	public function getDS_SITE() {
    	return $this->DS_SITE;
	}

	public function setDS_SITE($DS_SKYPE) {
  		 $this->DS_SKYPE = $DS_SKYPE;
	}

	public function getDS_SKYPE() {
    	return $this->DS_SKYPE;
	}
	
	public function setID_STATUS($ID_STATUS) {
  		 $this->ID_STATUS = $ID_STATUS;
	}

	public function getID_STATUS() {
    	return $this->ID_STATUS;
	}
	
    function Locadoras($ds_locadora, $DS_ENDERECO, $DS_COMPLEMENTO, $DS_NUMERO, $DS_BAIRRO, $NR_CEP,
	 $cidade, $DS_DDD_TELEFONE, $DS_TELEFONE, $DS_DDD_TELEFONE2, $DS_TELEFONE2, $DS_DDD_FAX,
	$DS_FAX, $DS_EMAIL, $DS_SITE, $DS_SKYPE, $ID_STATUS) {
    	
    	$this->ds_locadora = $ds_locadora;
    	$this->DS_ENDERECO = $DS_ENDERECO;
		$this->DS_COMPLEMENTO = $DS_COMPLEMENTO;
		$this->DS_NUMERO = $DS_NUMERO;
		$this->DS_BAIRRO = $DS_BAIRRO;
		$this->NR_CEP = $NR_CEP;
		$this->cidade = $cidade;
		$this->DS_DDD_TELEFONE = $DS_DDD_TELEFONE;
		$this->DS_DDD_TELEFONE = $DS_DDD_TELEFONE2;
		$this->DS_TELEFONE2 = $DS_TELEFONE2;
		$this->DS_DDD_FAX = $DS_DDD_FAX;
		$this->DS_FAX = $DS_FAX;
		$this->DS_EMAIL = $DS_EMAIL;
		$this->DS_SITE = $DS_SITE;
		$this->DS_SKYPE = $DS_SKYPE;
		$this->ID_STATUS = $ID_STATUS;
    }
}
?>
