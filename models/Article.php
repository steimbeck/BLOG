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
        $req->execute(array( $title, $content, $id));
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
    public function comment($author, $comment, $ticketid)
    {   
        
        $infos = SPDO::getInstance();
        $req= $infos->prepare('INSERT INTO comments( author, comment, ticketid, comdate )VALUES(?, ?, ?, NOW())');
        $req->execute(array( $author, $comment, $ticketid));
        $req->closeCursor();
       
    
    }
       public function getComments($id){
        $id = $_GET['id'];
        $infos = SPDO::getInstance();
        $req =$infos-> prepare('SELECT * FROM comments WHERE ticketid = ?');
        $req->execute(array($id));
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    
    }
    public function eraseComment($id){
         
        $infos = SPDO::getInstance();
         $req = $infos->prepare('DELETE FROM comments WHERE comid = ?');
         $req->execute(array($id));
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