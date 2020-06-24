<?php

// Modèle chapitres

require_once("model/Manager.php"); // Connexion BDD

class ChapterManager extends Manager
{
    // Fonction qui exécute une requête qui extrait le dernier chapitre seulement (dont les max 1000 premiers char du text)
    public function getLastChapter()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, image_path, DATE_FORMAT(creation_date, '%d/%m/%Y') AS creation_date_fr, LEFT(content, 1000) AS content_extract FROM p4_chapters ORDER BY creation_date DESC LIMIT 0, 1");

        return $req->fetch();
    }

    // Extrait les données des 6 avant-derniers chapitres (dont les max 250 premiers char du texte)
    public function getChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, image_path, LEFT(content, 250) AS content_extract FROM p4_chapters ORDER BY creation_date DESC LIMIT 1,7");

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
}
