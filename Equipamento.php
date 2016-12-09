<?php

class Equipamento{
private $nome;
private $grupo;
private $dtInstlacao;
private $dtManutençao;
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
	public function getDtManutençao() {
		return $this->dtManutençao;
	}
	public function setDtManutençao($dtManutençao) {
		$this->dtManutençao = $dtManutençao;
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