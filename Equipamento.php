<?php

class Equipamento{
private $nome;
private $grupo;
private $dtInstlacao;
private $dtManutenšao;
private $qtManutencao;
private $status;

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	public function getGrupo() {
		return $this->grupo;
	}
	public function setGrupo($grupo) {
		$this->grupo = $grupo;
		return $this;
	}
	public function getDtInstlacao() {
		return $this->dtInstlacao;
	}
	public function setDtInstlacao($dtInstlacao) {
		$this->dtInstlacao = $dtInstlacao;
		return $this;
	}
	public function getDtManutenšao() {
		return $this->dtManutenšao;
	}
	public function setDtManutenšao($dtManutenšao) {
		$this->dtManutenšao = $dtManutenšao;
		return $this;
	}
	public function getQtManutencao() {
		return $this->qtManutencao;
	}
	public function setQtManutencao($qtManutencao) {
		$this->qtManutencao = $qtManutencao;
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