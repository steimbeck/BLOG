<?php
include_once 'models/article.php';

function addArticle()
{
    
       
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
    
   if (isset($_POST['article_title'], $_POST['article_content']) && !empty($_POST['article_title']) && !empty($_POST['article_content'])) {
      $article_title = htmlspecialchars($_POST['article_title']);
      $article_content = htmlspecialchars($_POST['article_content']);
    
     $articleManager = new ArticleManager();
     $article = $articleManager->create ($_POST['article_title'], $_POST['article_content']);
  echo ' Tous les champs ont été  remplis ';
}else{

echo' Vous devez remplir tous les champs';
}
      
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
   
    include_once 'views/updateArticleForm.php';
}

function saveUpdateArticle()
{
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager =new ArticleManager();
    $article= $articleManager->update( $title, $content);
    var_dump($_POST);
    
}

function deleteArticle()
{
    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager = new ArticleManager();
    $article = $articleManager->delete($id);

  // header('location :views/list-articles.php');
   
}