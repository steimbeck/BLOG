<?php
include_once 'models/article.php';
include_once 'models/Comment.php';

function addArticle()
{

    include_once 'views/addArticleForm.php';
}

function addComment()
{

    if (isset($_POST['pseudo'], $_POST['message']) && !empty($_POST['pseudo']) && !empty($_POST['message'])) {
        $author = htmlspecialchars($_POST['pseudo']);
        $content = htmlspecialchars($_POST['message']);
        $articleid = $_GET['id'];

        $commentManager = new CommentManager();
        $article = $commentManager->comment($author, $content, $articleid);
        include_once 'views/detail-article.php';

        echo "Votre commentaire a bien été enregistré";

    } else {

        echo "Vous devez remplir tous les champs";
    }

}
function reportComment()
{
    if(isset($_GET['id']) AND !empty($_GET['id'])){

    
    $id = $_GET['id'];
    
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $warningManager = new CommentManager();
    $warningManager-> flagComment($id);
   
    echo ' Votre message a bien été reporté';
    

 }else{

      echo 'Veulliez signaler le commentaire';
    }


}

function listWarningComments(){

 $articleManager = new ArticleManager();
 $articles = $articleManager->list();

$listReportManager = new CommentManager();
 $comments=$listReportManager->listReportComments();

 include_once "views/list-comments.php";


}

function deleteComment()
{
    $id = $_GET['id'];
    $commentManager = new ArticleManager();
    $article = $commentManager->get((int) $_GET['id']);
    $delmessage = new CommentManager();
     $delmessage->eraseComment($id);
    
}

function saveNewArticle()
{

    if (isset($_POST['article_title'], $_POST['article_content']) && !empty($_POST['article_title']) && !empty($_POST['article_content'])) {
        $article_title = htmlspecialchars($_POST['article_title']);
        $article_content = htmlspecialchars($_POST['article_content']);
        $articleManager = new ArticleManager();
        $article = $articleManager->create($_POST['article_title'], $_POST['article_content']);

        $message = 'Tous les champs ont été  remplis';
    } else {

        $message = 'Vous devez remplir tous les champs';
    }
}

function detailArticle()
{

    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $messagesManager = new CommentManager();
    $articles = $messagesManager->getComments($id);

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
    $articleManager = new ArticleManager();
    $article = $articleManager->update($id, $title, $content);
}


function deleteArticle()
{
    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager = new ArticleManager();
    $article = $articleManager->delete($id);

    header('location :index.php');

}