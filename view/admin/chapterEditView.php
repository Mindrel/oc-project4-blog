<!-- Vue édition et suppression d'un chapitre admin -->

<?php ob_start(); ?>

<h1>Chapitre <?= $chapter["id"] ?></h1>

<h2>Édition du chapitre</h2>
<form action="index.php?action=chapterEditValid&id=<?= $chapter["id"] ?>" method="post">
    <div class="admin-edit-input">
        <label for="title">Titre du chapitre</label>
        <input type="text" id="title" name="title" value="<?= $chapter["title"] ?>" />
    </div>

    <div class="admin-edit-input">
        <label for="content">Contenu du chapitre</label>
        <textarea name="content" id="content" class="admin-textarea"><?= $chapter["content"] ?></textarea>
    </div>

    <div>
        <input type="submit" class="button-link" value="Valider les modifications" />
    </div>
</form>

<h2>Suppression du chapitre</h2>

<p>Avant de cliquer sur ce bouton, soyez sur de vouloir supprimer <strong>défintivement</strong> ce chapitre !</p>
<div class="delete-button">
    <a href="index.php?action=deleteChapter&id=<?= $chapter["id"] ?>"><input type="button" class="admin-delete-button" value="Supprimer le chapitre" /></a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
