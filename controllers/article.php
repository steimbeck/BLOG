<?php

include_once 'models/article.php';

function addArticle()
{
    
        $articleManager = new ArticleManager();
        $article = $articleManager->create('$id');
        echo'kglkrg!hng!lhg!hgihjgihjg!hi!';

        include_once 'views/addArticleForm.php';
   
 
}
function addComment($author, $content, $article){

 $articleManager = new ArticleManager();
 $article = $articleManager->get((int) $_GET['id']);
$articleManager = new ArticleManager();
 $article = $articleManager->comment($author, $content, $article);
 include_once 'views/detail-article.php';

     
}
 

function saveNewArticle()
{
    echo "IMPLEMENT ME";
}

function detailArticle()
{
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);

    include_once 'views/detail-article.php';
}

function listArticles()
{
    $articleManager = new ArticleManager();
    $articles = $articleManager->list();

    include_once 'views/list-articles.php';
}

function updateArticle()
{
    $id = $_GET['id'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager =new ArticleManager();
    $article= $articleManager->update($id, $title, $content);
    include_once 'views/updateArticleForm.php';
}

function saveUpdateArticle()
{
    echo "IMPLEMENT ME";
}

function deleteArticle()
{
    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager = new ArticleManager();
    $article = $articleManager->delete($id);

    include_once 'views/list-articles.php';
}