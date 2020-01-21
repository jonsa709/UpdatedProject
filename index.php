<?php


define("BASEDIR", __DIR__);

require BASEDIR."/vendor/autoload.php";

$user = new \App\Models\User();

/*$db = new System\DB\Mysql;
$sql = "SELECT * FROM users";
$check = $db->run($sql);
dump($db->fetch());*/
$user->select('id, fullname')->where('fullname','Person A')->orWhere('age', 20, '>=');

dump($user);

