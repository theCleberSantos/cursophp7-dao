<?php 

require_once("config.php");

/* ========= Carrega um usuario ========

$root = new usuario();
$root->loadbyId(6);
echo $root;     
*/


/* ========= Carrega uma lista de usuários =========

$lista = Usuario::getList();
echo json_encode($lista);
*/

/* ========= Carrega uma lista de usuarios buscandoo pelo login =========

$search = Usuario::search("cl");
echo json_encode($search)
*/

/* ========= Carrega usuario usando login e senha ========= */

$usuario = new Usuario();
$usuario -> login("cleber","santos");
echo $usuario; 


 ?>