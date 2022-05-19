<?php
namespace App\Controller;

class ArticleController 
{

    public function home()
    {
        require_once('Model/ArticleManager.php');

    $run = new \App\Model\ArticleManager();
    $test = $run->getArticles();
        
    if ($test) {
        require('View/home.php');   
        # code...
    }
    }

}