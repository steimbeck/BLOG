<?php
include_once 'models/article.php';

function addArticle()
{
    
       
     include_once 'views/addArticleForm.php';
    

       
   
 
}
function addComment($author, $content, $article)
 {
   if (isset($_POST['submit_comment'])) {

    if (isset($_POST['pseudo'], $_POST['message']) and !empty($_POST['pseudo']) and !empty($_POST['message'])) {
    $author = strip_tags($_POST['pseudo']);
    $comment = strip_tags($_POST['message']);
    $article->id();
var_dump($_POST);
$articleManager = new ArticleManager();
 $article = $articleManager->create ($_POST['pseudo'], $_POST['message']);
$articleManager = new ArticleManager();
 $article = $articleManager->comment($author, $content, $article);
 include_once 'views/detail-article.php';
 echo 'Votre message a bien été ajouté';
    }else{

          echo "Tous les champs doivent etre complétés";
        }
     
}
  }

function saveNewArticle()
{
    
   if (isset($_POST['article_title'], $_POST['article_content']) && !empty($_POST['article_title']) && !empty($_POST['article_content'])) {
      $article_title = htmlspecialchars($_POST['article_title']);
      $article_content = htmlspecialchars($_POST['article_content']);
     $articleManager = new ArticleManager();
     $article = $articleManager->create ($_POST['article_title'], $_POST['article_content']);
  echo 'Tous les champs ont été  remplis';
}else{

echo  'Vous devez remplir tous les champs';
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
   $articleManager = new ArticleManager();
   $article = $articleManager->get((int) $_GET['id']);
    include_once 'views/updateArticleForm.php';
}

function saveUpdateArticle()
{
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $articleManager =new ArticleManager();
    $article= $articleManager->update($id,  $title, $content);
    
    
}

function deleteArticle()
{
    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager = new ArticleManager();
    $article = $articleManager->delete($id);

  //header('location :index.php');
   
}