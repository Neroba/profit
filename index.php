<?php

require __DIR__.'/autoload.php';

$users = \App\Models\user::findall();

var_dump($users);