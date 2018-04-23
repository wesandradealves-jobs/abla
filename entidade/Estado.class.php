<?php

class Estado {

    function Estado() {
    }
    
    private $id;
    private $nomeEstado;
    
    public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
	}
	public function getNomeEstado(){
		return $this->nomeEstado;
	}
	public function setNomeEstado($nomeEstado){
		$this->nomeEstado = $nomeEstado;
	}
	
	public function construtorEstado($nomeEstado) {
		$this->nomeEstado= $nomeEstado;
	}
}
?>