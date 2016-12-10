<?php
abstract class Pessoa {
	private $nome;
	private $rg;
	private $cpf;
	private $telefone;
	private $dtNascimento;
	private $celular;
	private $email;
	private $senha;
	private $cep;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
	private $pais;
	private $cidade;
	private $sexo;
	private $status;
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	public function getRg() {
		return $this->rg;
	}
	public function setRg($rg) {
		$this->rg = $rg;
		return $this;
	}
	public function getCpf() {
		return $this->cpf;
	}
	public function setCpf($cpf) {
		$this->cpf = $cpf;
		return $this;
	}
	public function getTelefone() {
		return $this->telefone;
	}
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
		return $this;
	}
	public function getDtNascimento() {
		return $this->dtNascimento;
	}
	public function setDtNascimento($dtNascimento) {
		$this->dtNascimento = $dtNascimento;
		return $this;
	}
	public function getCelular() {
		return $this->celular;
	}
	public function setCelular($celular) {
		$this->celular = $celular;
		return $this;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
	public function getSenha() {
		return $this->senha;
	}
	public function setSenha($senha) {
		$this->senha = $senha;
		return $this;
	}
	public function getCep() {
		return $this->cep;
	}
	public function setCep($cep) {
		$this->cep = $cep;
		return $this;
	}
	public function getRua() {
		return $this->rua;
	}
	public function setRua($rua) {
		$this->rua = $rua;
		return $this;
	}
	public function getNumero() {
		return $this->numero;
	}
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}
	public function getComplemento() {
		return $this->complemento;
	}
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
		return $this;
	}
	public function getBairro() {
		return $this->bairro;
	}
	public function setBairro($bairro) {
		$this->bairro = $bairro;
		return $this;
	}
	public function getPais() {
		return $this->pais;
	}
	public function setPais($pais) {
		$this->pais = $pais;
		return $this;
	}
	public function getCidade() {
		return $this->cidade;
	}
	public function setCidade($cidade) {
		$this->cidade = $cidade;
		return $this;
	}
	
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
		return $this;
	}
	
}
?>