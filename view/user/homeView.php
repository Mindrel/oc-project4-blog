<!-- Vue de la page d'accueil (user) -->

<?php $title = "Billet simple pour l'Alaska - Jean Forteroche"; ?>

<?php ob_start(); ?>

<section id="last-chapter">
    <!-- Dernier chapitre posté -->
        <!-- Extrait du dernier chapitre -->
        <div class="last-chapter-text">
            <h1>
                Chap. <?= $lastChapter["id"] ?> - <?= htmlspecialchars($lastChapter["title"]); ?>
            </h1>

            <p class="last-chapter-datetime">Dernier chapitre publié le <time datetime="<?= $lastChapter["time_tag"] ?>" class="last-chapter-datetime"><?= $lastChapter["creation_date_fr"] ?></time></p>

            <p class="last-chapter-extract">
                <?= $lastChapter["content_extract"]; ?>
            </p>

            <!-- Lien d'accès au chapitre -->
            <a href="index.php?action=chapter&id=<?= $lastChapter["id"] ?>" class="button-link">Lire la suite</a>
        </div>

        <!-- illustration du dernier chapitre -->
        <div class="last-chapter-img">
            <img src="<?= $lastChapter["image_path"] ?>" alt="illustration" />
        </div>
</section>

<section id="previous-chapters-list">
    <h2>
        Précédents chapitres
    </h2>
    <!-- Extraits de chapitres dans l'ordre d'apparition du plus récent au plus ancien -->
    <ul class="chapter-gallery">
        <?php
        while ($data = $chapters->fetch()) {
        ?>
            <li class="previous-chapter">
                <img src="<?= $data["image_path"] ?>" alt="illustration" />

                <h3>Chap. <?= $data["id"] ?> - <?= htmlspecialchars($data["title"]); ?></h3>
                <p>
                    <?= $data["content_extract"]; ?>
                </p>
                <a href="index.php?action=chapter&id=<?= $data["id"] ?>" class="button-link">Lire</a>
            </li>
        <?php
        }
        $chapters->closeCursor();
        ?>
    </ul>
</section>

<section id="about">
    <h2>À propos de l'auteur</h2>
    <p>
        Jean Forteroche, né le 8 février 1948 à Nantes, est un écrivain français, dont une grande partie de l'oeuvre est consacrée à des romans d'aventures et d'anticipation.<br />
        Après avoir obtenu ses baccalauréats en lettres et en droit, Jean Forteroche poursuit ses études de droit à Paris. Il se consacre alors au théâtre, grâce aux Dumas, père et fils, et occupe le poste de secrétaire du théâtre lyrique jusqu'en 1979 où il fait représenter des pièces écrites en collaboration avec Michel Carré. <br />
        Pour faire face à de nouvelles responsabilités familiales, il devient agent de change. Jean Forteroche rencontre alors Pierre-Jules Hetzel, un éditeur, et lui propose un manuscrit Voyage en l'air qui deviendra Cinq semaines en ballon, marquant le début d'une longue collaboration.<br />
        <strong>Note : </strong>Vous retrouverez très bientôt l'intégralité des anciens chapitres en librarie. Pour soutenir l'auteur, n'hésitez pas à vous procurer Billet simple pour l'Alaska dès sa sortie !
    </p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
