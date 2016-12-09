<?php
class Funcionario extends Pessoa {
	
	
	private $tipo;
	
	function __construct()
	{
	
	}
	
	public function getTipo()
	{
		return $this->tipo;
	}
	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
		return $this;
	}
}