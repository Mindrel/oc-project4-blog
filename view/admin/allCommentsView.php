<!-- Vue liste des commentaires admin -->

<?php ob_start(); ?>

<h1>Modération des commentaires</h1>

<h2>Liste des commentaires classés par nombre de signalements et du plus récent au plus ancien</h2>
<table id="all-comments-table">
    <thead>
        <tr>
            <th class="comment-date-col">Date - Heure</th>
            <th class="comment-nochapter-col">Chap.</th>
            <th class="comment-author-col">Auteur</th>
            <th class="comment-email-col">Email</th>
            <th class="comment-extract-col">Extrait</th>
            <th class="comment-counter-col">Signalé</th>
            <th class="comment-edit-col">Modifier</th>
            <th class="comment-delete-col">Supprimer</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($data = $allComments->fetch()) {
        ?>
            <tr>
            <td class="comment-date-cell">
                    <?= $data["comment_date_fr"] ?>
                </td>
                <td class="comment-nochapter-cell">
                    <?= $data["chapter_id"] ?>
                </td>
                <td class="comment-author-cell">
                    <?= htmlspecialchars($data["author"]) ?>
                </td>
                <td class="comment-email-cell">
                    <?= htmlspecialchars($data["email"]) ?>
                </td>
                <td class="comment-extract-cell">
                    <?= htmlspecialchars($data["comment_extract"]) ?>
                </td>
                <td class="comment-counter-cell">
                    <strong><?= $data["reporting_counter"] ?> fois</strong>
                </td>
                <td class="comment-edit-cell">
                    <a href="index.php?action=commentEdit&id=<?= $data["id"] ?>"><i class="fas fa-edit"></i></a>
                </td>
                <td class="comment-delete-cell">
                    <a href="index.php?action=deleteComment&id=<?= $data["id"] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ? \nATTENTION : si vous acceptez, il sera impossible de revenir en arrière !')"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php
        }
        $allComments->closeCursor();
        ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
