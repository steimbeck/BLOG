<?php
include_once 'tools/pdo.php';

class Comment
{

    public $comid;
    public $author;
    public $comment;
    public $ticketid;
    public $report;
    public $comdate;

    public function __construct($comid, $author, $comment, $ticketid, $report, $comdate)
    {
        $this->comid = $comid;
        $this->author = $author;
        $this->comment = $comment;
        $this->ticketid = $ticketid;
        $this->report = $report;
        $this->comdate = $comdate;
    }

}

class CommentManager
{
    function list() {

        $req = SPDO::getInstance()->query(' SELECT * FROM comments ORDER BY id DESC');
        while ($row = $req->fetch()) {

            $var[] = $row;

        }
        $req->closeCursor();
        return $var;

    }

//création d'un commentaire
    public function comment($author, $comment, $ticketid)
    {

        $infos = SPDO::getInstance();
        $req = $infos->prepare('INSERT INTO comments( author, comment, ticketid, comdate )VALUES(?, ?, ?, NOW())');
        $req->execute(array($author, $comment, $ticketid));
        $req->closeCursor();

    }

//la récuperation d'un seul commentaire

    public function getComments($id)
    {
        $id = $_GET['id'];
        $infos = SPDO::getInstance();
        $req = $infos->prepare('SELECT * FROM comments WHERE ticketid = ? ORDER by comid DESC');
        $req->execute(array($id));
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;

    }
// la suppression d'un commentaire

    public function eraseComment($id)
    {
        $infos = SPDO::getInstance();
        $req = $infos->prepare('DELETE FROM comments WHERE comid = ?');
        $req->execute(array($id));
        $req->closeCursor();
    }

// signaler un commentaire
    public function flagComment($id)
    {
        
        $infos = SPDO::getInstance();
        $req = $infos->prepare('UPDATE comments SET report = ? WHERE comid = ?');
        $var = $req->execute(array(1, $id));
        $req->closeCursor();

    }

    public function  listReportComments(){
$id = $_GET['id'];
$infos = SPDO::getInstance();
$req = $infos->prepare('SELECT * FROM comments WHERE report = ? ORDER by comid DESC');
$req->execute(array(1));
$data = $req->fetchALL(PDO::FETCH_OBJ);
$req->closeCursor();
return $data;
       
    
}



}