<?php 
include_once('tools/pdo.php');

class Article {

    public $content;
    public $id;
    public $title;
    public $date;

    function __construct($id, $content, $title, $date) {
        $this->id = $id;
        $this->content = $content;
        $this->title = $title;
        $this->date = $date;
    }

}

class ArticleManager {
    function list() {
        
         //  new Article(1, "Article 1 contenu", "Titre art 1", new DateTime()),
         //new Article(2, "Article 2 contenu", "Titre art 2", new DateTime()),
         // new Article(3, "Article 3 contenu", "Titre art 3", new DateTime()),
          $req = SPDO::getInstance()->query('Select * FROM ticket ORDER BY id DESC');
         while ($row = $req->fetch()){

         $var[] =$row;
         
         }
         $req->closeCursor();
        return $var;
        
    }
    function create($id) 
    {
if (isset($_POST['article_title'], $_POST['article_content']))
 {
 $article_title = htmlspecialchars($_POST['article_title']);
 $article_content = htmlspecialchars($_POST['article_content']);
            $infos = SPDO::getInstance();
            $req =$infos->prepare("INSERT INTO ticket (title, content, date)VALUES(?, ?, NOW())");
            $req->execute(array($_POST['article-title'], $_POST['article_content']));
            $req->closeCursor();
          $message = 'Votre article a bien été enregistré';
           } else {
           $message = 'veuillez remplir tous les champs';
           }
            
             
         
    }
    function update() {}
    function get($id) {
        $infos = SPDO::getInstance();

        
        $req= $infos->prepare("SELECT id, title, content, DATE_FORMAT(date,'%d/%m/%y à %Hh%min%ss') AS date FROM ticket WHERE id = ?");

       $req->execute(array($id));
       
       while ($data =$req->fetch())
        {
        
            $var = $data;
        }

       $req->closeCursor();
       return $var;
       
       
    }
    function delete() {}
}