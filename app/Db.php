<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Db
 *
 * @author Администратор
 */
class Db {
    use Singleton;
    protected $dbh;
    protected function __construct() {
        $this->dbh = new \PDO("mysql:host=localhost;dbname=newDB","root","Pfk.nbyj");
//        echo 'Hello, DB!';
    }
    /**
     * 
     * @param type $sql
     * @param type $params
     * @return type
     */
    public function execute($sql, $params = []) {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }
    /**
     * 
     * @param string $sql
     * @param type $class
     * @return type
     */
    public function query($sql,$class) {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class); // возвращаем массив результатов
        }
        return []; // это пустой массив
    }
    
}
