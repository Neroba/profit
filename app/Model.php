<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Model
 *
 * @author Администратор
 */
abstract class Model {
    const TABLE = ''; 

    public static function findAll(){
        //$db = new \App\Db();
        $db = Db::instance();
        return $db->query(
                'SELECT * FROM '.static::TABLE, 
                static::class
                );
    }
}
