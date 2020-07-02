<?php

// Routeur admin

require("../../controller/administration.php");

try {

    // Si URL contient paramètre "action"...
    if (isset($_GET["action"])) {

        // Et si param action == valeur "allchapters" alors on déclenche l'affichage de tous les chapitres
        if ($_GET["action"] == "allChapters") {
            displayAllChapters();
        
        // Sinon si param action == valeur "allComments" alors on déclenche l'affichage de tous les commentaires
        } elseif ($_GET["action"] == "allComments") {
            displayAllComments();
        
        // Sinon si param action == valeur "chapterEdit" alors on déclenche la page de l'éditeur de texte du chapitre
        } elseif ($_GET["action"] == "chapterEdit") {
            displayChapterEdit();
        
        //sinon si param action == valeur "commentEdit" alors on déclenche la page de l'éditeur de texte du commentaire
        } elseif ($_GET["action"] == "commentEdit") {
            displayCommentEdit();

        // Sinon si param action == valeur "chapterEditValid" et que toutes les autres conditions sont respectées, on insère le chapitre modifié
        } elseif ($_GET["action"] == "chapterEditValid") {
            if (isset($_GET["id"]) && $_GET["id"] > 0) {

                if (!empty($_POST["title"]) || !empty($_POST["content"])) {
                    editChapter($_POST["title"], $_POST["content"], $_GET["id"]);
                } else {
                    throw new Exception("tous les champs ne sont pas remplis.");
                }
            } else {
                throw new Exception("le numéro de chapitre est invalide.");
            }

        // Sinon si param action == valeur "commentEditValid" et que toutes les autres conditions sont respectées, on insère le commentaire modifié
        } elseif ($_GET["action"] == "commentEditValid") {
            if (isset($_GET["id"]) && $_GET["id"] > 0) {

                if (!empty($_POST["comment"]) || !empty($_POST["author"]) || !empty($_POST["email"])) {
                    editComment($_POST["comment"], $_POST["author"], $_POST["email"], $_GET["id"]);
                } else {
                    throw new Exception("tous les champs ne sont pas remplis.");
                }
            } else {
                throw new Exception("le numéro de commentaire est invalide.");
            }
        
        // Sinon si param action == newChapterEdit on ouvre la vue création de chapitre
        } elseif ($_GET["action"] == "newChapterEdit") {       
            require("chapterAddView.php");
    
        
        // Sinon si param action == valeur "addChapter" et que toutes les infos demandées sont saisies on crée le nouveau chapitre
        } elseif ($_GET["action"] == "addChapter") {
            if (!empty($_POST["title"]) || !empty($_POST["content"])) {
                addChapter($_POST["title"], $imagePath, $_POST["content"]);
            } else {
                throw new Exception("tous les champs ne sont pas remplis.");
            }

        // Sinon si param action == valeur "deleteComment" et que id présent alors on déclenche la suppression du com    
        } elseif ($_GET["action"] == "deleteComment") {
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                removeComment($_GET["id"]);
            } else {
                throw new Exception("le numéro de commentaire est invalide.");
            }
        }

    } else {
        // Dans tous les autres cas on affiche le tableau de bord
        displayDashboard();
    }

} catch (Exception $e) {
    $_SESSION["error"] = $e->getMessage();
    require("errorView.php");
}
