<?php 

// Contrôleur admin

require_once("../model/AdminCommentManager.php");
require_once("../model/AdminChapterManager.php");

// Affiche chapitres et commentaires les plus récennts dans le tableau de bord
function displayDashboard()
{
    $latestCommentsManager = New AdminCommentManager();
    $latestComments = $latestCommentsManager->getLatestComments();

    $latestChaptersManager = New AdminChapterManager();
    $latestChapters = $latestChaptersManager->getLatestChapters();

    require("../view/administrator/dashboardView.php");
}