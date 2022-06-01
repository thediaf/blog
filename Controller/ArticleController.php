<?php
namespace App\Controller;

require_once('Model/ArticleManager.php');

class ArticleController 
{
    protected $model;
    public function __construct()
    {
        $this->model = new \App\Model\ArticleManager();
    }

    public function home()
    {
        $articles = $this->model->getArticles();
            
        if ($articles) {
            require('View/home.php');   
            # code...
        }
    }

    public function show($id)
    {
        $article = $this->model->getArticle($id);
        var_dump($article);
        require('View/show.php');
    }

}