<?php

require __DIR__.'/autoload.php';

$db = new \App\Db();

$res = $db->query('SELECT * FROM foo WHERE id>10');
var_dump($res);