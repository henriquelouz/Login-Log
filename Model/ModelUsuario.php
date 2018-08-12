<?php
require_once('../db/conecta.php');

class ModelUsuario
{
    /**
     * @desc Insere no banco os dados do Usuario
     * @param $dados Objeto Usuario
     *
     */
    public function insere($dados)
    {
        $senha = md5($dados->getSenha());
        $db = new Conecta();
        $validacao  = $this->validaReplica($dados);

        if($validacao == 0)
        {
            return 0;
        }else{
            $sql = "insert into usuario (nome,senha,ativo) values('{$dados->getNome()}','{$senha}', 1)";
            $db->executa_sql($sql);
            return 1;
        }
        
    }

    /**
     * @desc Valida acesso do usuário
     * @param $usuario, $senha 
     */
    public function consultaAcesso($usuario, $senha)
    {
        $db = new Conecta();
        $sql = "SELECT * 
                  FROM usuario
                 WHERE ativo = 1 
                   AND nome ='{$usuario}'";
        $db->executa_sql($sql);
        $dados = $db->getFechAll();

        if (count($dados) > 0) {
            if (md5($senha) == $dados[0]['senha']) {
                return $dados[0]['idusuario'];
            } else {
                return "__senhaerrada";
            }
        } else {
            return "__usuarioerrado";
        }

    }

    /**
     * @desc Verifica se já há este usuário registrado
     * @param $dados Objeto Usuario
     *
     */
    public function validaReplica($dados){

        $db = new Conecta();
        $sql = "SELECT idusuario
                  FROM usuario
                 WHERE nome = '{$dados->getNome()}'";
        $db->executa_sql($sql);
        $dados = $db->getFechAll();

        if(count($dados)>0)
        {
            return 0;
        }else{
            return 1;
        }
    }
}