<?php

require __DIR__.'/autoload.php';

$db = new \App\Db();

$res = $db->query('SELECT * FROM foo');
var_dump($res);