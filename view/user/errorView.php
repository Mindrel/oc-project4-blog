<!-- Vue détaillée d'un chapitre et de ses commentaires (user) -->

<?php $title = "Erreur"; ?>

<?php ob_start(); ?>

    <p><?= $_SESSION["error"] ?></p>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
