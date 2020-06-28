<?php

// Modèle gestion commentaires admin

require_once("../model/Manager.php"); // Connexion BDD

class AdminCommentManager extends Manager
{
    // Requête qui récupère les 10 derniers com
    public function getLatestComments()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, chapter_id, author, email, DATE_FORMAT(comment_date, '%d/%m/%Y - %Hh%i') AS comment_date_fr, LEFT(comment, 100) AS comment_extract, reporting_counter FROM p4_comments ORDER BY comment_date DESC LIMIT 0, 9");

        return $req;
    }

    // Insertion d'un commentaire dans la bdd
    // public function insertComment($chapterId, $author, $email, $comment)
    // {
    //     $db = $this->dbConnect();
    //     $comments = $db->prepare("INSERT INTO p4_comments(chapter_id, author, email, comment_date, comment) VALUES(?, ?, ?, NOW(), ?)");
    //     $affectedLines = $comments->execute(array($chapterId, $author, $email, $comment));

    //     return $affectedLines;
    // }
}