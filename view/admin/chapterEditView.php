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
        <input type="submit" class="button-link" value="Valider les modifications" onclick="return confirm('Souhaitez-vous valider les modifications ? \nLe contenu modifié apparaîtra sur le blog.')"/>
    </div>
</form>

<h2>Suppression du chapitre</h2>

<p>Avant de cliquer sur ce bouton, soyez sur de vouloir supprimer <strong>définitivement</strong> ce chapitre !</p>
<div class="delete-button">
    <a href="index.php?action=deleteChapter&id=<?= $chapter["id"] ?>" class="admin-delete-button" onclick="return confirm('Êtes-vous vraiment sûr de vouloir supprimer ce chapitre ? \nATTENTION : si vous acceptez, il sera impossible de revenir en arrière ! \nDe plus, les commentaires liés à ce chapitres seront également définitivement supprimés.')">Supprimer le chapitre</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
