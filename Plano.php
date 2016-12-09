<?php

class Plano{
private $funcionario;
private $nome;
private $duracao;
private $tpPagamento;
private $dtPagamento;
private $status;
	public function getFuncionario() {
		return $this->funcionario;
	}
	public function setFuncionario($funcionario) {
		$this->funcionario = $funcionario;
		return $this;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	public function getDuracao() {
		return $this->duracao;
	}
	public function setDuracao($duracao) {
		$this->duracao = $duracao;
		return $this;
	}
	public function getTpPagamento() {
		return $this->tpPagamento;
	}
	public function setTpPagamento($tpPagamento) {
		$this->tpPagamento = $tpPagamento;
		return $this;
	}
	public function getDtPagamento() {
		return $this->dtPagamento;
	}
	public function setDtPagamento($dtPagamento) {
		$this->dtPagamento = $dtPagamento;
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