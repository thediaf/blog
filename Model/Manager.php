<?php

namespace App\Model;

class Manager {
    
    public function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'root', 'root', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        return $db;
    }
    
    
    
}

?>