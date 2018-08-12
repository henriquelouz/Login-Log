<?php 
require_once('../Model/ModelLog_acesso.php');

$mdLog_acesso = new ModelLog_acesso();
$log = $mdLog_acesso->busca();

require_once("../log.html");