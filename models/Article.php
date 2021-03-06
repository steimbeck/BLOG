<?php
include_once ROOT_DIRECTORY.'tools/pdo.php';



class Article
{

    public $content;
    public $id;
    public $title;
    public $date;

    public function __construct($id, $content, $title, $date)
    {
        $this->id = $id;
        $this->content = $content;
        $this->title = $title;
        $this->date = $date;
    }

}

class ArticleManager
{
    //Affiche les articles
    function list() {

        $req = SPDO::getInstance()->query('SELECT * FROM ticket ORDER BY id DESC');
        while ($row = $req->fetch()) {

            $var[] = $row;

        }
        $req->closeCursor();
        return $var;

    }
    //Création d'un article
    public function create($title, $content)
    {
        $infos = SPDO::getInstance();
        $req = $infos->prepare("INSERT INTO ticket (title, content, date)VALUES(?, ?, NOW())");
        $req->execute(array($title, $content));
        $req->closeCursor();

    }
    public function update($id, $title, $content)
    {

        $infos = SPDO::getInstance();
        $req = $infos->prepare('UPDATE ticket SET title= ?, content=? WHERE id = ?');
        $req->execute(array($title, $content, $id));
        $req->closeCursor();

    }
    //Affiche un article
    public function get($id)
    {

        $infos = SPDO::getInstance();
        $id = $_GET['id'];
        $req = $infos->prepare("SELECT id, title, content, DATE_FORMAT(date,'%d/%m/%y à %Hh%min%ss') AS date FROM ticket WHERE id = ?");

        $req->execute(array($id));

        while ($data = $req->fetch()) {

            $var = $data;
        }
        
        $req->closeCursor();

        return $var;

    }
    
    public function delete($id)
    {

        $infos = SPDO::getInstance();
        $req = $infos->prepare('DELETE FROM TICKET WHERE id = ?');
        $req->execute(array($id));
        $req->closeCursor();

    }

   
}