<?php

 class usuario{

	protected $idusuario;
	protected $nome;
	protected $senha;
	protected $ativo;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario( $idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

	public function getNome() {
		return $this->nome;
	}

	public function setNome( $nome)
    {
        $this->nome = $nome;

        return $this;
    }

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha( $senha)
    {
        $this->senha = $senha;

        return $this;
    }

	public function getAtivo() {
		return $this->ativo;
	}

	public function setAtivo( $ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

}

