<?php



class formulario {

	private $pes_nome;

	private $pes_cpf;

	private $pes_rg;

	private $pes_orgao_exped;

	private $pes_dt_nasc;

	private $pes_sexo;

	private $pes_cel1;

	private $pes_cel2;

	private $pes_email1;

	private $pes_email2;

	private $pes_ocupacao;

	private $pes_cargo;

	private $pes_grau_escolar;

	private $pes_lin_estrang;

	private $pes_lin_estrang_out;

	private $pes_qualif_prof;

	private $pes_form_tecnica;

	private $pes_form_superior;

	private $pes_cursos_prof;

	private $pes_anos_exper;

	private $pes_soft_loc;	

	private $pes_senha;	

	// MÉTODOS SET E GET:

	

	public function getPes_nome() {

			return $this->pes_nome;

		}

	public function setPes_nome( $pes_nome ){

			$this->pes_nome = $pes_nome;

		}

	

	public function getPes_cpf() {

			return $this->pes_cpf;

		}

	public function setPes_cpf( $pes_cpf ){

			$this->pes_cpf = $pes_cpf;

		}

	

	public function getPes_rg() {

			return $this->pes_rg;

		}

	public function setPes_rg( $pes_rg ){

			$this->pes_rg = $pes_rg;

		}

	

	public function getPes_orgao_exped() {

			return $this->pes_orgao_exped;

		}

	public function setPes_orgao_exped( $pes_orgao_exped ){

			$this->pes_orgao_exped = $pes_orgao_exped;

		}

	

	public function getPes_dt_nasc() {

			return $this->pes_dt_nasc;

		}

	public function setPes_dt_nasc( $pes_dt_nasc ){

			$this->pes_dt_nasc = $pes_dt_nasc;

		}

		

	public function getPes_sexo() {

			return $this->pes_sexo;

		}

	public function setPes_sexo( $pes_sexo ){

			$this->pes_sexo = $pes_sexo;

		}

	public function getPes_cel1() {

			return $this->pes_cel1;

		}

	public function setPes_cel1( $pes_cel1 ){

			$this->pes_cel1 = $pes_cel1;

		}

	

	public function getPes_cel2() {

			return $this->pes_cel2;

		}

	public function setPes_cel2( $pes_cel2 ){

			$this->pes_cel2 = $pes_cel2;

		}

		

	public function getPes_email1() {

			return $this->Pes_email1;

		}

	public function setPes_email1( $pes_email1 ){

			$this->pes_email1 = $pes_email1;

		}

		

	public function getPes_email2() {

			return $this->pes_email2;

		}

	public function setPes_email2( $pes_email2 ){

			$this->pes_email2 = $pes_email2;

		}

	public function getPes_ocupacao() {

			return $this->pes_ocupacao;

		}

	public function setPes_ocupacao( $pes_ocupacao ){

			$this->pes_ocupacao = $pes_ocupacao;

		}

	public function getPes_cargo() {

			return $this->pes_cargo;

		}

	public function setPes_cargo( $pes_cargo ){

			$this->pes_cargo = $pes_cargo;

		}

	public function getPes_grau_escolar() {

			return $this->pes_grau_escolar;

		}

	public function setPes_grau_escolar( $pes_grau_escolar ){

			$this->pes_grau_escolar = $pes_grau_escolar;

		}	

	public function getPes_lin_estrang() {

			return $this->pes_lin_estrang;

		}

	public function setPes_lin_estrang( $pes_lin_estrang ){

			$this->pes_lin_estrang = $pes_lin_estrang;

		}

	public function getPes_lin_estrang_out() {

			return $this->pes_lin_estrang_out;

		}

	public function setPes_lin_estrang_out( $pes_lin_estrang_out ){

			$this->pes_lin_estrang_out = $pes_lin_estrang_out;

		}	

	public function getPes_qualif_prof() {

			return $this->pes_qualif_prof;

		}

	public function setPes_qualif_prof( $pes_qualif_prof ){

			$this->pes_qualif_prof = $pes_qualif_prof;

		}

	public function getPes_form_tecnica() {

			return $this->pes_form_tecnica;

		}

	public function setPes_form_tecnica( $pes_form_tecnica ){

			$this->pes_form_tecnica = $pes_form_tecnica;

		}

	public function getPes_form_superior() {

			return $this->pes_form_superior;

		}

	public function setPes_form_superior( $pes_form_superior ){

			$this->pes_form_superior = $pes_form_superior;

		}

	public function getPes_cursos_prof() {

			return $this->pes_cursos_prof;

		}

	public function setPes_cursos_prof( $pes_cursos_prof ){

			$this->pes_cursos_prof = $pes_cursos_prof;

		}

	public function getPes_anos_exper() {

			return $this->pes_anos_exper;

		}

	public function setPes_anos_exper( $pes_anos_exper ){

			$this->pes_anos_exper = $pes_anos_exper;

		}

	public function getPes_soft_loc() {

			return $this->pes_soft_loc;

		}

	public function setPes_soft_loc( $pes_soft_loc ){

			$this->pes_soft_loc = $pes_soft_loc;

		}	

	public function getPes_senha() {

			return $this->pes_senha;

		}

	public function setPes_senha( $pes_senha ){

			$this->pes_senha = $pes_senha;

		}	

	

	

		

	function formulario($pes_nome,$pes_cpf,$pes_rg,$pes_orgao_exped,$pes_dt_nasc,$pes_sexo,

	$pes_cel1,$pes_cel2,$pes_email1,$pes_email2, $pes_ocupacao, $pes_cargo, $pes_grau_escolar,

	 $pes_lin_estrang, $pes_lin_estrang_out,$pes_qualif_prof, $pes_form_tecnica, $pes_form_superior,

	$pes_cursos_prof,$pes_anos_exper, $pes_soft_loc, $pes_senha)

		{

		$this->pes_cpf = $pes_cpf;

		$this->pes_nome = $pes_nome;

		$this->pes_rg = $pes_rg;

		$this->pes_orgao_exped = $pes_orgao_exped;

		$this->pes_dt_nasc = $pes_dt_nasc;

		$this->pes_sexo = $pes_sexo;

		$this->pes_cel1 = $pes_cel1;

		$this->pes_cel2 = $pes_cel2;

		$this->pes_email1 = $pes_email1;

		$this->pes_email2 = $pes_email2;

		$this->pes_ocupacao = $pes_ocupacao;

		$this->pes_cargo = $pes_cargo;

		$this->pes_grau_escolar = $pes_grau_escolar;

		$this->pes_lin_estrang = $pes_lin_estrang;

		$this->pes_lin_estrang_out = $pes_lin_estrang_out;

		$this->pes_qualif_prof = $pes_qualif_prof;

		$this->pes_form_tecnica = $pes_form_tecnica;

		$this->pes_form_superior = $pes_form_superior;

		$this->pes_cursos_prof = $pes_cursos_prof;		

		$this->pes_anos_exper = $pes_anos_exper;

		$this->pes_soft_loc = $pes_soft_loc;	

		$this->pes_senha = $pes_senha;	

    }

}

?>