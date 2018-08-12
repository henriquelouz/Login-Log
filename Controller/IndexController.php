<?php
require_once('../_class/classUsuario.php');
require_once('../Model/ModelUsuario.php');

require_once('../_class/classlog_acesso.php');
require_once('../Model/ModelLog_acesso.php');

$nome = $_POST["usuario"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];

/**
 * Efetua o login do usuário
 *
*/
if($_POST['tipo'] == "login")
{
    $mdUsuario = new ModelUsuario();
    $flag = $mdUsuario->consultaAcesso($nome, $senha);
    
    if(is_numeric($flag)){
        $log_acesso = new log_acesso();
        $log_acesso->setIdusuario($flag);
        $log_acesso->setData_acesso(date('Y-m-d h:i:s'));

        $mdLog_acesso = new ModelLog_acesso();
        $mdLog_acesso->insere($log_acesso);
        echo 1;
    }else if($flag == "__senhaerrada"){
        echo 0;
    }else{
        echo 2;
    }
}


/**
 * Cria o usuário
 *
 */
else if($_POST['tipo'] == "criar")
{

    $usuario = new usuario();
    $usuario->setNome($nome);
    $usuario->setSenha($senha);

    $mdUsuario = new ModelUsuario();
    $flag = $mdUsuario->insere($usuario);
    echo $flag;
}