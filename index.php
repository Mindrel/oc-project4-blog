<?php

// Routeur

require("controller/blog.php");

try {
    // Si URL contient paramètre "action"...
    if (isset($_GET["action"])) {

        // Et si param action == valeur "chapter"...
        if ($_GET["action"] == "chapter") {

            // Et si ID présent et sup à 0 alors on déclenche la méthode displayChapter, sinon erreur
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                displayChapter();
            } else {
                throw new Exception("Cet identifiant de chapitre n'existe pas");
            }
        }
    } else {
        // Dans tous les autres cas on déclenche méthode displayListChapters
        displayListChapters();
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
