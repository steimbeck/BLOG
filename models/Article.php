<?php 
include_once('tools/pdo.php');

class Article {

    public $content;
    public $id;
    public $title;
    public $creationDate;

    function __construct($id, $content, $title, $creationDate) {
        $this->id = $id;
        $this->content = $content;
        $this->title = $title;
        $this->creationDate = $creationDate;
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
    function create() {}
    function update() {}
    function get($id) {
        return new Article(3, "Article 3 contenu", "Titre art 3", new DateTime());
    }
    function delete() {}
}