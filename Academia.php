<?php
Class Academia{
	private $cnpj;
	private $nome;
	private $razao;
	private $token;
	private $status;
	public function getCnpj() {
		return $this->cnpj;
	}
	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
		return $this;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	public function getRazao() {
		return $this->razao;
	}
	public function setRazao($razao) {
		$this->razao = $razao;
		return $this;
	}
	public function getToken() {
		return $this->token;
	}
	public function setToken($token) {
		$this->token = $token;
		return $this;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}
	
	
	
	
	
}

?>