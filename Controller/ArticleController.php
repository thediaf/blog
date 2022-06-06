<?php
namespace App\Controller;

use App\Model\ArticleManager;
use App\Model\CategoryManager;

require_once('Model/ArticleManager.php');

class ArticleController 
{
    protected $model;
    public function __construct()
    {
        $this->model = new ArticleManager();
    }

    public function home()
    {
        $articles = $this->model->getArticles();
        $categories = $this->model->getCategories();
        // $categories = new CategoryManager();
        // var_dump($categories);
            
        if ($articles) {
            require('View/home.php');   
            # code...
        }
    }

    public function show($id)
    {
        $article = $this->model->getArticle($id);
        $categories = $this->model->getCategories();
        require('View/show.php');
    }

    public function categoryArticles($id)
    {
        // echo "ddklf";
        $articles = $this->model->getArticlesByCategory($id);
        $categories = $this->model->getCategories();
        // var_dump($articles);
        require('View/home.php');
    }

}