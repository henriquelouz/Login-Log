<?php

 class log_acesso{

	protected $idlog_acesso;
	protected $idusuario;
	protected $data_acesso;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario( $idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

	public function getIdlog_acesso() {
		return $this->idlog_acesso;
	}

	public function setIdlog_acesso( $idlog_acesso)
    {
        $this->idlog_acesso = $idlog_acesso;

        return $this;
    }

	public function getData_acesso() {
		return $this->data_acesso;
	}

	public function setData_acesso( $data_acesso)
    {
        $this->data_acesso = $data_acesso;

        return $this;
    }
}

