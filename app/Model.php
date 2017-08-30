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
    public $id;

    public static function findAll(){
        //$db = new \App\Db();
        $db = Db::instance();
        return $db->query(
                'SELECT * FROM '.static::TABLE, 
                static::class
                );
    }
    
    public function isnew() {
        return empty($this->id);
    }
    
    public function insert(){
        if (!$this->isnew()){
            return;
        }
        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k){
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }
        var_dump($values);
        $sql = 'INSERT INTO ' . static::TABLE . ''
                . '(' . implode(',',$columns) . ') '
                . 'VALUES (' . implode(',', array_keys($values)) . ')';
        $db = Db::instance();
        $db->execute($sql, $values);
   //     die();
    }
}
