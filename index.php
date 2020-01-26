<?php


define("BASEDIR", __DIR__);

require BASEDIR."/vendor/autoload.php";

$user = new \App\Models\User(5);

dump($user);

$user->delete();

dump($user);

/*$db = new System\DB\Mysql;
$sql = "SELECT * FROM users";
$check = $db->run($sql);
dump($db->fetch());*/

//$users = $user->get();

//select('id, fullname')->where('fullname','Person A')->orWhere('age', 20, '>=')->orderBy('age')->orderBy('address', 'DESC')->limit(15)->offset(30)->
//dump($user);


