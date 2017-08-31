<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 *
 * @author Администратор
 */
interface HasEmail {
    /**
     * Метод, возвращающий адрес электронной почты
     * @return string Адрес электронной почты
     */
    public function getEmail();
    
}
