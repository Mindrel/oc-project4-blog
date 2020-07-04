<!-- Vue création d'un chapitre admin -->

<?php ob_start(); ?>

<h1>Nouveau chapitre</h1>

<h2>Édition du nouveau chapitre</h2>
<form action="index.php?action=addChapter" method="post">
    <div class="admin-edit-input">
        <label for="title">Titre du chapitre</label>
        <input type="text" id="title" name="title" placeholder="Saisir le titre ici" required />
    </div>

    <div class="admin-edit-input">
        <label for="content">Contenu du chapitre</label>
        <textarea name="content" id="content" class="admin-textarea"></textarea>
    </div>

    <div>
        <input type="submit" class="button-link" value="Envoyer le nouveau chapitre" onclick="return confirm('Confirmez-vous l\'ajout de ce chapitre ? \nCelui-ci apparaîtra immédiatement sur le blog.')"/>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
