<?php

// Modèle commentaires

require_once("model/Manager.php"); // Connexion BDD

class CommentManager extends Manager
{
    // Requête qui extrait tous les commentaire du chapitre affiché
    public function getComments($chapterId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare("SELECT id, author, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%i') AS comment_date_fr, comment FROM p4_comments WHERE chapter_id = ? ORDER BY comment_date DESC");
        $comments->execute(array($chapterId));

        return $comments;
    }

    // Insertion d'un commentaire dans la bdd
    public function insertComment($chapterId, $author, $email, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare("INSERT INTO p4_comments(chapter_id, author, email, comment_date, comment) VALUES(?, ?, ?, NOW(), ?)");
        $affectedLines = $comments->execute(array($chapterId, $author, $email, $comment));

        return $affectedLines;
    }

    // Modifie le compteur de signalement d'un com
    public function updateReportCounter($newCounter, $commentId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare("UPDATE p4_comments SET reporting_counter = :new_counter WHERE id = :comment_id");
        $modifiedCounter = $comments->execute(array(
            "new_counter" => $newCounter,
            "comment_id" => $commentId
        ));
    }
}