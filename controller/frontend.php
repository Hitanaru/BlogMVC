<?php

// Chargement des classes
require_once('model/articleManager.php');
require_once('model/userManager.php');

function home() {

    ob_start();

    require('view/frontend/home.php');
    
    $content = ob_get_clean();
    
    require('view/frontend/template.php');
}

function articles() {
    $articlesManager = new articleManager();
    $articles = $articlesManager->getArticles();

    ob_start();

    require('view/frontend/articles.php');
    
    $content = ob_get_clean();
    
    require('view/frontend/template.php');

}

function form(){
    ob_start();

    require('view/frontend/form.php');
    
    $content = ob_get_clean();
    
    require('view/frontend/template.php');
}

function article() {
    $articleManager = new articleManager();
    $article = $articleManager->getArticle($_GET['id']);

    ob_start();

    require('view/frontend/article.php');
    
    $content = ob_get_clean();

    require('view/frontend/template.php');
}

function insertArticle($name, $description, $category){
    $articleManager = new articleManager();

    $addedArticle = $articleManager->newArticle($name, $description, $category);

    ob_start();

    require('view/frontend/articles.php');
    
    $content = ob_get_clean();
    
    require('view/frontend/template.php');

}


function register(){

    ob_start();

    require('view/frontend/register.php');

    $content = ob_get_clean();

    require('view/frontend/template.php');
}


function newUser($username, $email, $password, $repeatPassword){

    $userManager = new user();

    $addedUser = $userManager->newUser($username, $email, $password, $repeatPassword);
}

