<?php
 
include_once  ROOT_DIRECTORY.'models/article.php';
include_once ROOT_DIRECTORY.'models/Comment.php';

function addArticle()
{

    include_once ROOT_DIRECTORY.'views/addArticleForm.php';
}

function addComment()
{

    if (isset($_POST['pseudo'], $_POST['message']) && !empty($_POST['pseudo']) && !empty($_POST['message'])) {
        $author = htmlspecialchars($_POST['pseudo']);
        $content = htmlspecialchars($_POST['message']);
        $articleid = $_GET['id'];

        $commentManager = new CommentManager();
        $article = $commentManager->comment($author, $content, $articleid);
        include_once ROOT_DIRECTORY. 'views/detail-article.php';

                echo  "Votre commentaire a bien été enregistré";
        

    } else {
        include_once ROOT_DIRECTORY. 'views/detail-article.php';
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
     include_once ROOT_DIRECTORY. 'views/detail-article.php';
    echo ' Ce commentaire a bien été signalé';
    

 }else{
        
    include_once ROOT_DIRECTORY. 'views/detail-article.php';
    
        echo 'Veulliez signaler le commentaire';
      
    }


}

function listWarningComments(){

 $articleManager = new ArticleManager();
 $articles = $articleManager->list();

$listReportManager = new CommentManager();
 $comments=$listReportManager->listReportComments();

 include_once ROOT_DIRECTORY."views/list-comments.php";


}

function deleteComment()
{ if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];
    $commentManager = new ArticleManager();
    $article = $commentManager->get((int) $_GET['id']);
    $delmessage = new CommentManager();
     $delmessage->eraseComment($id);
    include_once ROOT_DIRECTORY."views/detail-article.php";
 
    echo" Votre commentaire a bien été supprimé";
    
    
}else{  
      include_once ROOT_DIRECTORY."views/detail-article.php";
       echo' Merci de cliquer sur supprimer';

}
}

function saveNewArticle()
{

    if (isset($_POST['article_title'], $_POST['article_content']) && !empty($_POST['article_title']) && !empty($_POST['article_content'])) {
        $article_title = htmlspecialchars($_POST['article_title']);
        $article_content = htmlspecialchars($_POST['article_content']);
        $articleManager = new ArticleManager();
        $article = $articleManager->create($_POST['article_title'], $_POST['article_content']);
        include_once ROOT_DIRECTORY."views/addArticleForm.php";

        echo  'Votre nouvel article est maintenant ajouté';
    } else {

         include_once ROOT_DIRECTORY."views/addArticleForm.php";
        echo  'Vous devez remplir tous les champs';
    }
}

function detailArticle()
{

    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $messagesManager = new CommentManager();
    $articles = $messagesManager->getComments($id);

    include_once ROOT_DIRECTORY.'views/detail-article.php';
   
}

function listArticles()
{

    $articleManager = new ArticleManager();
    $articles = $articleManager->list();

    include_once ROOT_DIRECTORY.'views/list-articles.php';
}

function updateArticle()
{

    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    include_once ROOT_DIRECTORY.'views/updateArticleForm.php';
}

function saveUpdateArticle()
{
    if(isset($_POST["title"], $_POST['content'])&& !empty($_POST['title'])&& !empty($_POST['content'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $articleManager = new ArticleManager();
    $article = $articleManager->update($id, $title, $content);
    include_once ROOT_DIRECTORY.'views/updateArticleForm.php';
    echo'Votre article a bien été mis à jour.';

}else{

    include_once ROOT_DIRECTORY.'views/updateArticleForm.php';
    echo "Votre article n'a pas été mis à jour.";

}

}
function deleteArticle()
{  if (isset($_GET['id'])AND !empty($_GET['id'])){
    $id = $_GET['id'];
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int) $_GET['id']);
    $articleManager = new ArticleManager();
    $article = $articleManager->delete($id);
    
  //echo " L'article a été supprimé avec succés";
 
  $_SESSION['message']= " L'article a été supprimé avec succés";
 
 header('location:../admin/index.php');

 
}else{

      
     
     echo " l'article n'a pas été supprimé";
}

}

function display(){
  
  include_once ROOT_DIRECTORY.'views/auteur.php';
  
}