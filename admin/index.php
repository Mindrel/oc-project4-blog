<?php

// Routeur admin

require("../controller/administration.php");

try {

    // Si URL contient paramètre "action"...
    if (isset($_GET["action"])) {

        // Et si param action == valeur "allchapters" alors on déclenche l'affichage de tous les chapitres
        if ($_GET["action"] == "allChapters") {
            displayAllChapters();

        // Sinon si param action == valeur "chapterEdit" alors on déclenche l'affichage de la page d'édition du chapitre
        } elseif ($_GET["action"] == "chapterEdit") {
            displayChapterEdit();

        // Sinon si param action == valeur "chapterEditValid" et que toutes les autres conditions sont respectées, on insère le chapitre modifié
        } elseif ($_GET["action"] == "chapterEditValid") {
            if (isset($_GET["id"]) && $_GET["id"] > 0) {

                if (!empty($_POST["title"]) && !empty($_POST["content"])) {
                    editChapter($_POST["title"], $_POST["content"], $_GET["id"]);
                } else {
                    throw new Exception("tous les champs ne sont pas remplis.");
                }
            } else {
                throw new Exception("le numéro de chapitre est invalide.");
            }
        }
    } else {
        // Dans tous les autres cas on affiche le tableau de bord
        displayDashboard();
    }
} catch (Exception $e) {
    $_SESSION["error"] = $e->getMessage();
    require("../view/administrator/errorView.php");
}
