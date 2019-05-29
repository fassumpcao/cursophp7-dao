<?php

require_once("config.php");

/*
$sql = new Sql();

$teste = $sql->select("SELECT * FROM adms_usuarios");

echo json_encode($teste);

*/

$userObj = new Usuario();

$userObj->loadById(1);

echo $userObj;
 ?>
