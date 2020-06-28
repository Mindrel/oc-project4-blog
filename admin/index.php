<?php

// Routeur admin

require("../controller/administration.php");

try {

    // Si URL contient paramètre "action"...
    if (isset($_GET["action"])) {

        // Et si param action == valeur "allchapters" alors on déclenche l'affichage de tous les chapitres
        if ($_GET["action"] == "allchapters") {
            displayAllChapters();
        }

    } else {
        // Dans tous les autres cas on affiche le tableau de bord
        displayDashboard();
    }



} catch (Exception $e) { 
    $_SESSION["error"] = $e->getMessage();
    require("../view/admin/adminErrorView.php");
}