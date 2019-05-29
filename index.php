<?php

require_once("config.php");

/*
$sql = new Sql();

$teste = $sql->select("SELECT * FROM adms_usuarios");

echo json_encode($teste);

*/

/*
//Carrega um usuario
$userObj = new Usuario();
$userObj->loadById(1);
echo $userObj;
*/

/*
//Carrega uma lista de usuarios
$lista = Usuario::getList(); //metodo static
echo json_encode($lista);
*/

/*
//Carrega uma lista de usuarios pelo login
$search = Usuario::search("fa");
echo json_encode($search);
*/

//Login no sistema
$login = new Usuario();
$login->login("fassumpcao", "123Mudar2");
echo $login;

 ?>
