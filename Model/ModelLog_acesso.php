<?php
require_once('../db/conecta.php');

class ModelLog_acesso
{
    /**
     * @desc Insere no banco os dados do log_acesso
     * @param $dados Objeto log_acesso
     *
     */
    public function insere($dados)
    {
        $db = new Conecta();
        $sql = "insert into log_acesso (idusuario, data_acesso) values('{$dados->getIdusuario()}','{$dados->getData_acesso()}')";
        $db->executa_sql($sql);
    }

    /**
     * @desc Busca do banco os dados do log_acesso
     */
    public function busca()
    {
        $db = new Conecta();
        $sql = "SELECT usuario.idusuario
                       ,nome 
                       ,DATE_FORMAT(data_acesso, '%d/%m/%Y %h:%i:%s') as data_acesso
                  FROM usuario
            INNER JOIN log_acesso
                    ON (usuario.idusuario = log_acesso.idusuario)
              ORDER BY idlog_acesso";
        $db->executa_sql($sql);
        $dados = $db->getFechAll();
        return $dados;
    }
}