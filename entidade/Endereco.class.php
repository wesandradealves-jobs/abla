<?php

class endereco {
	
	private $pes_cpf;
	private $lograd_com;
	private $num_com;
	private $compl_com;
	private $bairro_com;
	private $cep_com;
	private $lograd_resid;
	private $num_resid;
	private $compl_resid;
	private $bairro_resid;
	private $cep_resid;
	
	//GETS e SETS
	public function getPes_cpf() {
			return $this->pes_cpf;
	}
	public function setPes_cpf($pes_cpf) {
			$this->pes_cpf= $pes_cpf;
	} 
	public function getLograd_com() {
			return $this->lograd_com;
	}
	public function setLograd_com($lograd_com) {
			$this->lograd_comp= $lograd_com;
	}
	public function getNum_com() {
			return $this->num_com;
	}
	public function setNum_com($num_com) {
			$this->num_com= $num_com;
	}
	public function getCompl_com() {
			return $this->compl_com;
	}
	public function setCompl_com($compl_com) {
			$this->compl_com= $compl_com;
	}
	public function getBairro_com() {
			return $this->bairro_com;
	}
	public function setBairro_com($bairro_com) {
			$this->bairro_com= $bairro_com;
	}
	public function getCep_com() {
			return $this->cep_com;
	}
	public function setCep_com($cep_com) {
			$this->cep_com= $cep_com;
	}
	public function getLograd_resid() {
			return $this->lograd_resid;
	}
	public function setLograd_resid( $lograd_resid ){
			$this->lograd_resid = $lograd_resid;
	}
	public function getNum_resid() {
			return $this->num_resid;
	}
	public function setNum_resid( $num_resid ){
			$this->num_resid = $num_resid;
	}
	public function getcompl_resid() {
			return $this->compl_resid;
	}
	public function setCompl_resid( $compl_resid ){
			$this->compl_resid = $compl_resid;
	}
	public function getBairro_resid() {
			return $this->bairro_resid;
	}
	public function setBairro_resid( $bairro_resid ){
			$this->bairro_resid = $bairro_resid;
	}
	public function getCep_resid() {
			return $this->cep_resid;
	}
	public function setCep_resid( $cep_resid ){
			$this->cep_resid = $cep_resid;
	}
    function endereco($pes_cpf,$lograd_com,$num_com,$compl_com,$bairro_com,$cep_com,$lograd_resid,
    	$num_resid,$compl_resid,$bairro_resid,$cid_resid,$cep_resid) {
    	
    	$this->pes_cpf=$pes_cpf;
    	$this->lograd_com=$lograd_com;
    	$this->num_com=$num_com;
    	$this->compl_com=$compl_com;
    	$this->bairro_com=$bairro_com;
    	$this->cep_com=$cep_com;
    	$this->lograd_resid = $lograd_resid;
		$this->num_resid = $num_resid;
		$this->compl_resid = $compl_resid;
		$this->bairro_resid = $bairro_resid;
		$this->cid_resid = $cid_resid;
		$this->cep_resid = $cep_resid;
		
    	return $this;
    }
}
?>