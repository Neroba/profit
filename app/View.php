<?php

namespace App;

class View 
    implements \Countable
{
   
    protected $data = []; // здесь будут свойства, заданные при помощи магических методов
    
    public function __set($k,$v) {
        $this->data[$k] = $v;
    }
    
    public function __get($k) {
        return $this->data[$k];
    }
    
    public function render($template) {
        
        ob_start(); //открыть буфер вывода
        
        foreach ($this->data as $prop => $value) { // здесь все свойства превращаем в переменные для использования 
        //в шаблоне без слова $this
            $$prop = $value; // $$prop - переменная, чье имя содержится в переменной
        }
        //var_dump($$prop);
        
        include $template;  // поместить в него $template
        $content = ob_get_contents(); //помещаем в переменную содержимое буфера вывода 
        ob_end_clean();  // чистим и закрываем буфер
        return $content; // возвращаем переменную с содержимым
               
    }

    public function display($template) {
        //include $template;
        echo $this->render($template);
    }
    public function count() {
        return count($this->data);
    }
}
