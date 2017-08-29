<?php

/* 
 * App\Models\User => ./App/Models/user.php
 */
function __autoload($class)
{
 //echo __DIR__.'/'.str_replace('\\','/',$class).'php'
    require __DIR__.'/'.str_replace('\\','/',$class).'.php';
}

