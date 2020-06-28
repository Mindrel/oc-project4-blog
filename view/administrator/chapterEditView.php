<!-- Vue édition et suppression d'un chapitre admin -->

<?php ob_start(); ?>

<h1>Chapitre <?= $chapter["id"] ?></h1>

<h2>Édition du chapitre</h2>
<form action="#" method="post">
    <div class="admin-edit-input">
        <label for="title">Titre du chapitre</label>
        <input type="text" name="title" value="<?= htmlspecialchars($chapter["title"]) ?>" />
    </div>

    <div class="admin-edit-input">
        <label for="chapter-content">Contenu du chapitre</label>
        <textarea name="chapter-content" id="admin-textarea"><?= nl2br(htmlspecialchars($chapter["content"])) ?></textarea>
    </div>

    <div>
        <input type="submit" class="button-link" value="Valider les modifications" />
    </div>
</form>

<h2>Suppression du chapitre</h2>

<p>Avant de cliquer sur ce bouton, soyez sur de vouloir supprimer complètement ce chapitre !</p>
<form action="#">
    <input type="button" value="Supprimer le chapitre" />
</form>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
