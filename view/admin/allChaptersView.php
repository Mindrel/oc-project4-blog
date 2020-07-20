<!-- Vue liste des chapitres admin -->

<?php ob_start(); ?>

<h1>Gestion des chapitres</h1>

<h2>Liste des chapitres du plus récent au plus ancien</h2>
<table id="all-chapters-table">
    <thead>
        <tr>
            <th class="chapter-number-col">N°</th>
            <th class="chapter-date-col">Date</th>
            <th class="chapter-title-col">Titre</th>
            <th class="chapter-extract-col">Extrait</th>
            <th class="chapter-access-col">Accéder</th>
            <th class="chapter-edit-col">Modifier</th>
            <th class="chapter-delete-col">Supprimer</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($data = $allChapters->fetch()) {
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
            <a href="../../index.php?action=chapter&id=<?= $data["id"] ?>" target="blank"><i class="fas fa-book-open"></i></a>
            </td>
            <td class="chapter-edit-cell">
                <a href="index.php?action=chapterEdit&id=<?= $data["id"] ?>"><i class="fas fa-edit"></i></a>
            </td>
            <td class="chapter-delete-cell">
                <a href="index.php?action=deleteChapter&id=<?= $data["id"] ?>" onclick="return confirm('Êtes-vous vraiment sûr de vouloir supprimer le chapitre <?= $data['id'] ?> <?= $data['title'] ?> ? \nATTENTION : si vous acceptez, il sera impossible de revenir en arrière ! \nDe plus, les commentaires liés à ce chapitres seront également définitivement supprimés.')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php
        }
        $allChapters->closeCursor();
        ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
