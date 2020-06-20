<?php

require_once("model/ChapterManager.php");

function listChapters()
{
    $chapterManager = new ChapterManager();
    $chapters = $chapterManager->getChapters();

    // require("view/user/homeView.php"); 

    require("view/user/chapterView.php");
}