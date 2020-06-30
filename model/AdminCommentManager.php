<?php

// Modèle gestion commentaires admin

require_once("../../model/Manager.php"); // Connexion BDD

class AdminCommentManager extends Manager
{
    // Requête qui récupère les 10 derniers com
    public function getLatestComments()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, chapter_id, author, email, DATE_FORMAT(comment_date, '%d/%m/%Y - %Hh%i') AS comment_date_fr, LEFT(comment, 100) AS comment_extract, reporting_counter FROM p4_comments ORDER BY comment_date DESC LIMIT 0, 9");

        return $req;
    }

    // récupère tous les coms par ordre descendant du compteur de signalement
    public function getAllComments()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, chapter_id, author, email, DATE_FORMAT(comment_date, '%d/%m/%Y - %Hh%i') AS comment_date_fr, LEFT(comment, 100) AS comment_extract, reporting_counter FROM p4_comments ORDER BY reporting_counter DESC, comment_date DESC");

        return $req;
    }

    // Extrait les données du commentaire sélectionné
    public function getCurrentComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, chapter_id, author, email, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%i') AS comment_date_fr, comment FROM p4_comments WHERE id = ?");
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }

    // modif d'un commentaire dans la bdd
    public function editCommentReq($newComment, $newAuthor, $newEmail, $commentId)
    {
        $db = $this->dbConnect();
        $commentEditReq = $db->prepare("UPDATE p4_comments SET comment = :new_comment, author = :new_author, email = :new_email WHERE id = :comment_id");
        $modifiedComment = $commentEditReq->execute(array(
            "new_comment" => $newComment,
            "new_author" => $newAuthor,
            "new_email" => $newEmail,
            "comment_id" => $commentId
        ));

        return $modifiedComment;
    }

    // suppression d'un commentaire dans la bdd
    public function deleteCommentReq($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM p4_comments WHERE id = ?");
        $req->execute(array($commentId));
        $delComment = $req->fetch();

        return $delComment;
    }
}
