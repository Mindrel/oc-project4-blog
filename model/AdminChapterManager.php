<?php

// Modèle gestion des chapitres admin

require_once("../model/Manager.php"); // Connexion BDD

class AdminChapterManager extends Manager
{
    // Requête qui récupère les 5 derniers chapitres
    public function getLatestChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, DATE_FORMAT(creation_date, '%d/%m/%Y') AS creation_date_fr, title, LEFT(content, 200) AS content_extract FROM p4_chapters ORDER BY creation_date DESC LIMIT 0,5");

        return $req;
    }

    // Réquête qui récupère tous les chapitres
    public function allChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, DATE_FORMAT(creation_date, '%d/%m/%Y') AS creation_date_fr, title, LEFT(content, 200) AS content_extract FROM p4_chapters ORDER BY creation_date DESC");

        return $req;
    }
}