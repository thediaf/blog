<?php
namespace App\Model;

require_once('Model/Manager.php');

use App\Model\Manager;

class ArticleManager extends Manager
{
    protected $connexion;

    public function __construct()
    {
        $this->connexion  = $this->dbConnect();
    }

    public function getArticles()
    {

        $sql = 'SELECT id, title, content, created_at FROM article ORDER BY id DESC';
        $query =  $this->connexion->query($sql);

        return $query->fetchAll();

    }

    public function getArticle($id)
    {

        $sql = 'SELECT id, title, content, created_at FROM article WHERE id = ? ORDER BY id DESC';
        $query =  $this->connexion->prepare($sql);
        $query->execute(array($id));

        return $query->fetch();

    }

    public function getArticlesByCategory($id)
    {

        $sql = 'SELECT id, title, content, created_at FROM article WHERE categorie = ? ORDER BY id DESC';
        $query =  $this->connexion->prepare($sql);
        $query->execute(array($id));

        return $query->fetchAll();

    }

    public function getCategories()
    {

        $sql = 'SELECT id, title FROM categorie ORDER BY id DESC';
        $query =  $this->connexion->query($sql);

        return $query->fetchAll();

    }

}