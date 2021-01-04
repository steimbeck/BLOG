<?php
include_once 'tools/pdo.php';

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
    function list() {

        $req = SPDO::getInstance()->query('Select * FROM ticket ORDER BY id DESC');
        while ($row = $req->fetch()) {

            $var[] = $row;

        }
        $req->closeCursor();
        return $var;

    }
    public function create($id)
    {
        if (isset($_POST['article_title'], $_POST['article_content']) && !empty($_POST['article_title']) && !empty($_POST['article_content'])) {
            $article_title = htmlspecialchars($_POST['article_title']);
            $article_content = htmlspecialchars($_POST['article_content']);
            $id = $_GET['id'];
            $infos = SPDO::getInstance();
            $req = $infos->prepare("INSERT INTO ticket (title, content, date)VALUES(?, ?, NOW())");
            $req->execute(array($_POST['article-title'], $_POST['article_content']));
            $req->closeCursor();
            $message = 'Votre article a bien été enregistré';
        } else {
            $message = 'veuillez remplir tous les champs';
        }

    }
    public function update($id, $title, $content)
    {

        $infos = SPDO::getInstance();
        $id = $_GET['id'];
        $req = $infos->prepare('UPDATE ticket SET title= ?, content=? WHERE id= ?');
        $req->execute(array($id, $title, $content));
        $req->closeCursor();

    }
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
    public function Comment($author, $comment, $ticketid)
    {
        $infos = SPDO::getInstance();
        $req= $infos->prepare('INSERT INTO comments(author, comment, ticketid, comdate )VALUES(?, ?, ?, NOW())');
        $req->execute(array($author, $comment, $ticketid));
        $req->closeCursor();


    }

    public function delete($id)
    {   
        
        $infos = SPDO::getInstance();
        $req = $infos->prepare('DELETE FROM TICKET WHERE id = ?');
        $req->execute(array($id));
        $req->closeCursor();

    }
}
