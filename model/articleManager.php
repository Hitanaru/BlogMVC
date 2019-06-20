<?php

require_once('model/Manager.php');

class articleManager extends Manager
{
    public function getArticles()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id_article, name, description, category, date  FROM article ORDER BY id_article DESC');
        return $req;
    }

    public function getArticle($articleId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id_article, name, picture_url, description, date, category FROM article WHERE id_article = ? ");
        $req->execute(array($articleId));
        $postArticle = $req->fetch();
        return $postArticle;
    }
}