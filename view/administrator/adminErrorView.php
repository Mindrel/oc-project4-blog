<!-- Vue détaillée d'un chapitre et de ses commentaires (user) -->

<?php $title = "Erreur"; ?>

<?php ob_start(); ?>

    <div class="error-box">
       <p class="error-message">Erreur : <?= $_SESSION["error"] ?></p>
       <p><a href="index.php"><i class="fas fa-arrow-left"></i> Retour à l'interface d'administration</a></p>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
