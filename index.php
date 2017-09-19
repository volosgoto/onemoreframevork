<?php


require __DIR__ . '/autoload.php';

$db = new \App\Db();
//$res = $db->execute("CREATE TABLE foo (id SERIAL)");
//var_dump($res);
$data  = $db->query('SELECT * FROM foo');
var_dump($data);

?>