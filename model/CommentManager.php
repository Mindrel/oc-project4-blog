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
}