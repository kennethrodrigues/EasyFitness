<?php
class Aluno extends Pessoa {
	
	private $matricula;
	private $plano;
	
	function __construct()
	{
		
	}
	public function getMatricula() {
		
		return $this->matricula;
	}
	public function setMatricula($matricula) 
	{
		$this->matricula = $matricula;
		return $this;
	}
	public function getPlano() 
	{
		return $this->plano;
	}
	public function setPlano($plano) 
	{
		$this->plano = $plano;
		return $this;
	}
}
?>
