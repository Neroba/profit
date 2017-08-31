<?php

namespace App;

class View {
   
    protected $data = [];
    
    public function __set($k,$v) {
        $this->data[$k] = $v;
    }
    
    public function __get($k) {
        return $this->data[$k];
    }
    
    public function render($template) {
        
        ob_start(); //открыть буфер вывода
        include $template;  // поместить в него $template
        $content = ob_get_contents(); //помещаем в переменную содержимое буфера вывода 
        ob_end_clean();  // чистим и закрываем буфер
        return $content; // возвращаем переменную с содержимым
               
    }

    public function display($template) {
        //include $template;
        echo $this->render($template);
    }
}
