<?php $title = "Billet simple pour l'Alaska - Jean Forteroche"; ?>

<?php ob_start(); ?>

<section id="last-chapter">
    <!-- Dernier chapitre posté -->
    <?php
    while ($data = $lastChapter->fetch()) {
    ?>
        <div class="last-chapter-text">
            <h1>
                Chap. <?= $data["id"] ?> - <?= htmlspecialchars($data["title"]); ?>
            </h1>

            <p class="last-chapter-datetime">Dernier chapitre publié le <?= htmlspecialchars($data["creation_date_fr"]) ?></p>

            <p class="last-chapter-extract">
                <?= htmlspecialchars($data["content_extract"]); ?>
            </p>

            <button>Lire la suite</button>
        </div>

        <!-- illustration du dernier chapitre -->
        <div class="last-chapter-img">
            <img src="public/images/pic1920.jpg" alt="image" />
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
    <!-- Extraits des chapitres dans l'ordre d'apparition du plus récent au plus ancien -->
    <ul class="chapter-gallery">
        <li class="previous-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre test test</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa suscipit in explicabo animi quos, impedit, aperiam quisquam aut vero necessitatibus corrupti, deserunt at ex recusandae cupiditate similique asperiores architecto? Molestias.
            </p>
            <button>Lire</button>
        </li>
        <li class="previous-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="previous-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="previous-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="previous-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="previous-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
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
