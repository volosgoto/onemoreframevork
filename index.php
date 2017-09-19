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

$users = \App\Models\User::findAll();
var_dump($users);


?>