<?php

require_once("model/ChapterManager.php");

function listChapters()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapters();

    // Ligne correcte remplacée par une autre view pour les tests HTML/CSS
    // require("view/user/homeView.php"); 

    require("view/user/chapterView.php");
}