<?php 

// Contrôleur admin

require_once("../model/AdminCommentManager.php");

// Affiche les tableaux des chapitres et des commentaires dans le tableau de bord
function displayLatestComments()
{
    $latestCommentsManager = New AdminCommentManager();
    $latestComments = $latestCommentsManager->getLatestComments();

    $latestChaptersManager = New AdminCommentManager();
    $latestChapters = $latestChaptersManager->getLatestChapters();

    require("../view/administrator/dashboardView.php");
}