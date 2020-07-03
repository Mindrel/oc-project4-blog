<?php

// Modèle gestion des chapitres admin

require_once("../../model/Manager.php"); // Connexion BDD

class AdminChapterManager extends Manager
{
    // Requête qui récupère les 5 derniers chapitres
    public function getLatestChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, DATE_FORMAT(creation_date, '%d/%m/%Y') AS creation_date_fr, title, LEFT(content, 200) AS content_extract FROM p4_chapters ORDER BY creation_date DESC LIMIT 0,5");

        return $req;
    }

    // Récupère tous les chapitres
    public function getAllChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, DATE_FORMAT(creation_date, '%d/%m/%Y') AS creation_date_fr, title, LEFT(content, 200) AS content_extract FROM p4_chapters ORDER BY creation_date DESC");

        return $req;
    }

    // Extrait toutes les données du chapitre sélectionné
    public function getCurrentChapter($chapterId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, title, image_path, DATE_FORMAT(creation_date, '%d/%m/%Y') AS creation_date_fr, content FROM p4_chapters WHERE id = ?");
        $req->execute(array($chapterId));
        $chapter = $req->fetch();

        return $chapter;
    }
    
    // Requête modification d"un chapitre 
    public function editChapterReq($newTitle, $newContent, $chapterId)
    {
        $db = $this->dbConnect();
        $chapterEditReq = $db->prepare("UPDATE p4_chapters SET title = :new_title, content = :new_content WHERE id = :id");
        $modifiedChapter = $chapterEditReq->execute(array(
            "new_title" => $newTitle,
            "new_content" => $newContent,
            "id" => $chapterId
        ));

        return $modifiedChapter;
    }

    // Insère un chapitre dans la bdd
    public function insertChapter($title, $imagePath, $content)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare("INSERT INTO p4_chapters(title, image_path, creation_date, content) VALUES(?, ?, NOW(), ?)");
        $affectedLines = $chapter->execute(array($title, $imagePath, $content));

        return $affectedLines;
    }

    // Suppression d'un chapitre dans la bdd
    public function deleteChapterReq($chapterId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM p4_chapters WHERE id = ?");
        $req->execute(array($chapterId));
        $delChapter = $req->rowCount(); // Au lieu de fetch car delete

        return $delChapter;
    }
}
