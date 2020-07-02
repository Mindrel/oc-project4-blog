<?php 

// Contrôleur admin

require_once("../../model/AdminCommentManager.php");
require_once("../../model/AdminChapterManager.php");

// Affiche chapitres et commentaires les plus récents dans le tableau de bord
function displayDashboard()
{
    $latestCommentsManager = New AdminCommentManager();
    $latestComments = $latestCommentsManager->getLatestComments();

    $latestChaptersManager = New AdminChapterManager();
    $latestChapters = $latestChaptersManager->getLatestChapters();

    require("dashboardView.php");
}

// Affiche tous les chapitres existants
function displayAllChapters()
{
    $adminChapterManager = New AdminChapterManager();
    $allChapters = $adminChapterManager->getAllChapters();

    require("allChaptersView.php");
}

// Accès à l'éditeur de texte du chapitre sélectionné
function displayChapterEdit()
{
    $chapterManager = new AdminChapterManager();
    $chapter = $chapterManager->getCurrentChapter($_GET["id"]);

    require("chapterEditView.php");
}

// Valide la modification d'un chapitre
function editChapter($newTitle, $newContent, $chapterId)
{
    $adminChapterManager = New AdminChapterManager();
    $modifiedChapter = $adminChapterManager->editChapterReq($newTitle, $newContent, $chapterId);

    if ($modifiedChapter === false) {
        throw new Exception("impossible de modifier le chapitre.");
    } else {
        header("Location: index.php?action=allChapters");
    }
}

// Ajoute un nouveau chapitre
function addChapter($title, $imagePath, $content)
{
    $adminChapterManager = New AdminChapterManager();

    // Génération du chemin de l'image avec num aléatoire
    $randomNumber = rand(1, 30);
    $imagePath = "public/images/" . $randomNumber . ".jpg";

    $affectedLines = $adminChapterManager->insertChapter($title, $imagePath, $content);

    if ($affectedLines === false) {
        throw new Exception("impossible d'ajouter le chapitre.");
    } else {
        header("Location: index.php?action=allChapters");
    }
}

// Affiche tous les commentaires existants
function displayAllComments()
{
    $adminCommentManager = New AdminCommentManager();
    $allComments = $adminCommentManager->getAllComments();

    require("allCommentsView.php");
}

// Accès à l'éditeur de texte du chapitre sélectionné
function displayCommentEdit()
{
    $adminCommentManager = new AdminCommentManager();
    $comment = $adminCommentManager->getCurrentComment($_GET["id"]);

    require("commentEditView.php");
}

// Valide la modification d'un commentaire
function editComment($newComment, $newAuthor, $newEmail, $commentId)
{
    $adminCommentManager = New AdminCommentManager();
    $modifiedComment = $adminCommentManager->editCommentReq($newComment, $newAuthor, $newEmail, $commentId);

    if ($modifiedComment === false) {
        throw new Exception("impossible de modifier le commentaire.");
    } else {
        header("Location: index.php?action=allComments");
    }
}

// Valide la suppression d'un commentaire
function removeComment($commentId)
{
    $adminCommentManager = New AdminCommentManager();
    $delComment = $adminCommentManager->deleteCommentReq($_GET["id"]);

    if ($delComment === false) {
        throw new Exception("impossible de supprimer le commentaire.");
    } else {
        header("Location: index.php?action=allComments");
    }
}