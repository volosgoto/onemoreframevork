<?php


require __DIR__ . '/autoload.php';

//
//$db = new \App\Db();
////$res = $db->execute("CREATE TABLE foo (id SERIAL)");
////var_dump($res);
//$data  = $db->query(
//    'SELECT * FROM users',
//    'App\Models\User'
//    );
//var_dump($data);

// Переделать на статический
//$user = new \App\Models\User();
//$users = $user->findAll();

//echo \App\Models\User::$table . '<br>';
//echo \App\Models\User::TABLE . '<br>';
//$users = \App\Models\User::findAll();

$params = [':params' => 2];
$name = \App\Models\User::findById($params);
//var_dump($users);
var_dump($name);


?>