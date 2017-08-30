<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

trait Singleton {

    protected static $instance;
    
    protected function __construct() {}
    
    public static function instance(){
        if (null === static::$instance){
            static::$instance = new static;
        }
        return static::$instance;
    }
}
