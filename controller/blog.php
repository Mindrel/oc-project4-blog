<?php

require_once("model/ChapterManager.php");

// Fonction qui permet l'affichage du contenu de la page d'accueil
function homeListChapters()
{
    $lastChapterManager = new ChapterManager();
    $lastChapter = $lastChapterManager->getLastChapter();
    
    // $chaptersManager = new ChapterManager();
    // $chapters = $chaptersManager->getChapters();

    // Ligne correcte remplacée par une autre view pour les tests HTML/CSS
    require("view/user/homeView.php"); 

    // require("view/user/chapterView.php");
}