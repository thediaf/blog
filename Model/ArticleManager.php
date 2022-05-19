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

}