<!-- Vue édition et suppression d'un commentaire admin -->

<?php ob_start(); ?>

<h1>Commentaire posté le <?= $comment["comment_date_fr"] ?> sous le chapitre <?= $comment["chapter_id"] ?></h1>

<h2>Édition du commentaire</h2>
<form action="index.php?action=commentEditValid&id=<?= $comment["id"] ?>" method="post">
    <div>
        <div class="admin-edit-input">
            <label for="author">Auteur</label>
            <input type="text" id="author" name="author" value="<?= htmlspecialchars($comment["author"]) ?>" />
        </div>

        <div class="admin-edit-input">
            <label for="email">Email de l'auteur</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($comment["email"]) ?>" />
        </div>
    </div>

    <div class="admin-edit-input">
        <label for="comment">Contenu du commentaire</label>
        <textarea name="comment" id="comment" class="admin-textarea"><?= nl2br(htmlspecialchars($comment["comment"])) ?></textarea>
    </div>

    <div>
        <input type="submit" class="button-link" value="Valider les modifications" onclick="return confirm('Souhaitez-vous valider les modifications ? \nLe contenu modifié apparaîtra sur le blog.')"/>
    </div>
</form>

<h2>Suppression du commentaire</h2>

<p>Avant de cliquer sur ce bouton, soyez sur de vouloir supprimer <strong>définitivement</strong> ce commentaire !</p>
<div class="delete-button">
    <a href="index.php?action=deleteComment&id=<?= $comment["id"] ?>" class="admin-delete-button" onclick="return confirm('Êtes-vous sûr de vouloir supprimer défintivement ce commentaire ? \nATTENTION : si vous acceptez, il sera impossible de revenir en arrière !')">Supprimer le commentaire</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
