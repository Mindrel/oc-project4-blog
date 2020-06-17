<?php $title = "TITRE ROMAN - Jean Forteroche"; ?>

<?php ob_start(); ?>

<section id="last-chapter" class="container">
    <!-- Dernier chapitre posté -->
    <div>
        <h1>
            Titre très très important !
        </h1>

        <p><strong>SOUS-TITRE MAJ</strong></p>

        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic pariatur ullam neque aliquam cum. Dolorem corrupti earum delectus molestias ipsa error, perferendis laboriosam neque voluptatem sunt vitae minus iure quia!</p>

        <button>Lire le chapitre</button>
    </div>
    <div>
        <!-- illustration du dernier chapitre -->
        <img src="public/images/img.jpg" alt="image" />
    </div>
</section>

<section id="list-chapters" class="container">
    <h2>
        Anciens chapitres publiés
    </h2>
    <!-- Extraits des chapitres dans l'ordre d'apparition du plus récent au plus ancien -->
    <div class="old-chapter">
        <img src="public/images/img2.jpg" alt="image" />

        <h3>Titre chapitre</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
        <button>Lire le chapitre</button>
    </div>
    <div class="old-chapter">
        <img src="public/images/img2.jpg" alt="image" />

        <h3>Titre chapitre</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
        <button>Lire le chapitre</button>
    </div>
    <div class="old-chapter">
        <img src="public/images/img2.jpg" alt="image" />

        <h3>Titre chapitre</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
        <button>Lire le chapitre</button>
    </div>
    <div class="old-chapter">
        <img src="public/images/img2.jpg" alt="image" />

        <h3>Titre chapitre</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
        <button>Lire le chapitre</button>
    </div>
    <div class="old-chapter">
        <img src="public/images/img2.jpg" alt="image" />

        <h3>Titre chapitre</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
        <button>Lire le chapitre</button>
    </div>
    <div class="old-chapter">
        <img src="public/images/img2.jpg" alt="image" />

        <h3>Titre chapitre</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
        <button>Lire le chapitre</button>
    </div>


</section>

<section id="about">
    <h2>À propos de l'auteur</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ex magni mollitia doloribus, harum, earum dolor, odit officiis distinctio laudantium animi quasi accusantium nisi dolorum facilis atque sed asperiores. Sapiente.</p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
