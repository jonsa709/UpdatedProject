<?php

define("BASEDIR", __DIR__);

require BASEDIR."/vendor/autoload.php";

$db = new System\DB\Mysql;
$sql = "SELECT * FROM users";
$check = $db->run($sql);
var_dump($db->fetch());