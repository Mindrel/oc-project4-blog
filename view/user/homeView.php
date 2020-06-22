<?php $title = "Billet simple pour l'Alaska - Jean Forteroche"; ?>

<?php ob_start(); ?>

<section id="last-chapter">
    <!-- Dernier chapitre posté -->
    <?php
    while ($data = $lastChapter->fetch()) {
    ?>
        <!-- Extrait du dernier chapitre -->
        <div class="last-chapter-text">
            <h1>
                Chap. <?= $data["id"] ?> - <?= htmlspecialchars($data["title"]); ?>
            </h1>

            <p class="last-chapter-datetime">Dernier chapitre publié le <?= htmlspecialchars($data["creation_date_fr"]) ?></p>

            <p class="last-chapter-extract">
                <?= nl2br(htmlspecialchars($data["content_extract"])); ?>
            </p>

            <a href="index.php?action=chapter&id=<?= $data["id"] ?>" class="button-link">Lire la suite</a>
        </div>

        <!-- illustration du dernier chapitre -->
        <div class="last-chapter-img">
            <img src="<?= $data["image_path"] ?>" alt="illustration" />
        </div>
    <?php
    }
    $lastChapter->closeCursor();
    ?>
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
                    <?= nl2br(htmlspecialchars($data["content_extract"])); ?>
                </p>
                <a href="#" class="button-link">Lire</a>
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
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Maiores ex magni mollitia doloribus, harum, earum dolor, odit officiis distinctio laudantium animi quasi accusantium nisi dolorum facilis atque sed asperiores. Sapiente.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga accusantium inventore veritatis ut quia sunt quibusdam. Fugiat similique quo doloremque maxime sed minima veritatis voluptas, quasi illo ratione! Deleniti.
    </p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
