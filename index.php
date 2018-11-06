<?php 

require_once("config.php");

$root = new usuario();
$root->loadbyId(6);

echo $root;

 ?>