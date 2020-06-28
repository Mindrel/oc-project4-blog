<?php 

// Contrôleur admin

require_once("../model/AdminCommentManager.php");
require_once("../model/AdminChapterManager.php");

// Affiche chapitres et commentaires les plus récents dans le tableau de bord
function displayDashboard()
{
    $latestCommentsManager = New AdminCommentManager();
    $latestComments = $latestCommentsManager->getLatestComments();

    $latestChaptersManager = New AdminChapterManager();
    $latestChapters = $latestChaptersManager->getLatestChapters();

    require("../view/administrator/dashboardView.php");
}

// Affiche tous les chapitres existants
function displayAllChapters()
{
    $adminChapterManager = New AdminChapterManager();
    $allChapters = $adminChapterManager->getAllChapters();

    require("../view/administrator/allChaptersView.php");
}

// Accès à l'interface d'édition du chapitre sélectionné
function displayChapterEdit()
{
    $chapterManager = new AdminChapterManager();
    $chapter = $chapterManager->getCurrentChapter($_GET["id"]);

    require("../view/administrator/chapterEditView.php");
}

function editChapter($newTitle, $newContent, $chapterId)
{
    $adminChapterManager = New AdminChapterManager();
    $modifiedChapter = $adminChapterManager->editChapterReq($newTitle, $newContent, $chapterId);

    if ($modifiedChapter === false) {
        throw new Exception("impossible de modifier le chapitre.");
    } else {
        header("Location: index.php?action=chapter&id=" . $chapterId);
    }
}