<!-- Vue tableau de bord admin -->

<?php ob_start(); ?>

<h1>Tableau de bord</h1>

<h2>Les cinq derniers chapitres</h2>
<table id="last-chapters-table">
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
        <tr>
            <td class="chapter-number-cell">

            </td>
            <td class="chapter-date-cell">
                <!-- php date chap -->01/01/2020
            </td>
            <td class="chapter-title-cell">
                <!-- php titre chapitre -->Coucou ça va
            </td>
            <td class="chapter-extract-cell">
                <!-- php extrait chap --> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus recusandae voluptatum molestias magnam quae similique voluptas et doloribus dolorem, laboriosam reprehenderit deserunt quos maxime asperiores. Ea modi a vitae error. klhdajzklh dh jh zeadhze dj hdejzh h dij
            </td>
            <td class="chapter-access-cell">
                <a href="#"><i class="fas fa-book-open"></i></a>
            </td>
        </tr>
    </tbody>
</table>

<h2>Les dix derniers commentaires</h2>

<table id="last-comments-table">
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
        while ($data = $lastComments->fetch()) {
        ?>
            <tr>
                <td class="comment-date-cell">
                    <?= $data["comment_date_fr"] ?>
                </td>
                <td class="comment-nochapter-cell">
                    <?= $data["chapter_id"] ?>
                </td>
                <td class="comment-author-cell">
                    <?= $data["author"] ?>
                </td>
                <td class="comment-email-cell">
                    <?= $data["email"] ?>
                </td>
                <td class="comment-extract-cell">
                    <?= $data["comment_extract"] ?>
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
        $lastComments->closeCursor();
        ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
