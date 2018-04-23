<?php

class usuario {

    private  $nm_usuario;
    private  $ds_login;
	private  $ds_senha;
	
	public function getNm_usuario() {
		return $this->nm_usuario;
	}
	public function setNm_usuario( $nm_usuario ) {
		$this->nm_usuario = $nm_usuario;
	}
	public function getDs_login() {
		return $this->ds_login;
	}
	public function setDs_login( $ds_login ) {
		$this->ds_login = $ds_login;
	}
	public function getDs_senha() {
		return $this->ds_senha;
	}
	public function setDs_senha( $ds_senha ) {
		$this->ds_senha = $ds_senha;
	}
	function construtorUsuario($nm_usuario,$ds_login,$ds_senha){
    			
    		$this->nm_usuario = $nm_usuario;	
	    	$this->ds_login = $ds_login;
			$this->ds_senha = $ds_senha;
			    		
   		}	
}

?>