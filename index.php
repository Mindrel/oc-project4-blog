<?php

// Routeur

require("controller/blog.php");

try {
    // Si URL contient paramètre "action"
    if (isset($_GET["action"])) {

        // Si param action == valeur "chapter"
        if ($_GET["action"] == "chapter") {

            // Et si ID présent et sup à 0, déclenche la méthode displayChapter
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                displayChapter();
            }
        }

    } else {
        // Dans tous les autres cas on déclenche méthode displayListChapters
        displayListChapters();
    }
    
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
