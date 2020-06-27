<?php 

// Contrôleur admin

require_once("../model/AdminCommentManager.php");

// Affiche le tableau des commentaires dans le tableau de bord
function displayLatestComments()
{
    $lastCommentsManager = New AdminCommentManager();
    $lastComments = $lastCommentsManager->getLatestComments();

    require("../view/administrator/dashboardView.php");
}