<?php
namespace App\Controller;

class ArticleController 
{

    public function home()
    {
        require_once('Model/Manager.php');

    $run = new \App\Model\Manager();
    $test = $run->dbConnect();
    if ($test) {
        require('View/template.php');   
        # code...
    }
    }

}