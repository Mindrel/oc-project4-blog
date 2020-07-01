<?php

// Contrôleur

require_once("model/ChapterManager.php");
require_once("model/CommentManager.php");

// Fonction qui permet l'affichage du contenu de la page d'accueil (7 derniers chapitres dont le dernier à part)
function displayListChapters()
{
    $lastChapterManager = new ChapterManager();
    $lastChapter = $lastChapterManager->getLastChapter();

    $chaptersManager = new ChapterManager();
    $chapters = $chaptersManager->getChapters();

    require("view/user/homeView.php");
}

// Affichage détaillé d'un chapitre et de ses commentaires
function displayChapter()
{
    $chapterManager = new ChapterManager();
    $chapter = $chapterManager->getCurrentChapter($_GET["id"]);

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments($_GET["id"]);

    require("view/user/chapterView.php");
}

// Ajoute un commentaire
function addComment($chapterId, $author, $email, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->insertComment($chapterId, $author, $email, $comment);

    if ($affectedLines === false) {
        throw new Exception("impossible d'ajouter le commentaire.");
    } else {
        header("Location: index.php?action=chapter&id=" . $chapterId . "#current-chapter-comments");
    }
}

// Incrémente le compteur de signalement d'un commentaire
function incrementReportCounter($newCounter, $commentId)
{
    $reportCommentManager = new CommentManager();
    $comment = $reportCommentManager->getReportCounter($_GET["id"]);

    $commentManager = new CommentManager();
    $modifiedCounter = $commentManager->updateReportCounter($newCounter++, $_GET["id"]);
    
    if ($modifiedCounter === false) {
        throw new Exception("impossible de signaler ce commentaire.");
    } else {
        header("Location: index.php");
    }
}
