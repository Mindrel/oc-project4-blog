<?php

// Routeur principal

require("controller/blog.php");

try {
    // Si URL contient paramètre "action"...
    if (isset($_GET["action"])) {

        // Et si param action == valeur "chapter"...
        if ($_GET["action"] == "chapter") {

            // Et si ID présent et supérieur à 0 alors on déclenche la méthode displayChapter, sinon erreur
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                displayChapter();
            } else {
                throw new Exception("le numéro de chapitre est invalide.");
            }

            // Sinon si action == valeur "addComment"...
        } elseif ($_GET["action"] == "addComment") {
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                // Et si nom, email, et commentaire non vides alors on déclenche addComment
                if (!empty($_POST["author"]) && !empty($_POST["email"]) && !empty($_POST["comment"])) {
                    addComment($_GET["id"], $_POST["author"], $_POST["email"], $_POST["comment"]);
                } else {
                    throw new Exception("tous les champs ne sont pas remplis.");
                }
            } else {
                throw new Exception("le numéro de chapitre est invalide.");
            }

            // Sinon si action == "reportComment"
        } elseif ($_GET["action"] == "reportComment") {
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                // Et si compteur de signalement non vide alors on déclenche incrementRep...
                if (!empty($_POST["reporting_counter"])) {
                    incrementReportCounter($_GET["id"], $_POST["reporting_counter"]);
                } else {
                    throw new Exception ("il manque la nouvelle valeur du compteur.");
                }
            } else {
                throw new Exception("le numéro de commentaire est invalide.");
            }
        }

        
    } else {
        // Dans tous les autres cas on déclenche méthode displayListChapters
        displayListChapters();
    }

    // Si on attrape erreur on ouvre la page d'erreur avec son message
} catch (Exception $e) {
    $_SESSION["error"] = $e->getMessage();
    require("view/user/errorView.php");
}
