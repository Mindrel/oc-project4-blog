<!-- Vue tableau de bord admin -->

<?php ob_start(); ?>

<h1>Tableau de bord</h1>

<h2>Les cinq derniers chapitres publiés</h2>
<table id="latest-chapters-table">
    <thead>
        <tr>
            <th class="chapter-number-col">N°</th>
            <th class="chapter-date-col">Date</th>
            <th class="chapter-title-col">Titre</th>
            <th class="chapter-extract-col">Extrait</th>
            <th class="chapter-access-col">Accéder</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($data = $latestChapters->fetch()) {
        ?>
        <tr>
            <td class="chapter-number-cell">
                <?= $data["id"] ?>
            </td>
            <td class="chapter-date-cell">
                <?= $data["creation_date_fr"] ?>
            </td>
            <td class="chapter-title-cell">
                <?= htmlspecialchars($data["title"]) ?>
            </td>
            <td class="chapter-extract-cell">
                <?= htmlspecialchars($data["content_extract"]) ?>
            </td>
            <td class="chapter-access-cell">
                <a href="LIEN VERS MODIF SUPPRESION DU CHAPITRE"><i class="fas fa-book-open"></i></a>
            </td>
        </tr>
        <?php
        }
        $latestChapters->closeCursor();
        ?>
    </tbody>
</table>

<h2>Les dix commentaires les plus récents</h2>

<table id="latest-comments-table">
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
        while ($data = $latestComments->fetch()) {
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
                    <?= $data["reporting_counter"] ?> fois
                </td>
                <td class="comment-edit-cell">
                    <a href="#LIEN MODIFIER COM"><i class="fas fa-edit"></i></a>
                </td>
                <td class="comment-delete-cell">
                    <a href="#LIEN SUPPRIMER COM"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php
        }
        $latestComments->closeCursor();
        ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
