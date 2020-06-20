<?php $title = "TITRE ROMAN - Jean Forteroche"; ?>

<?php ob_start(); ?>

<section id="last-chapter">
    <!-- Dernier chapitre posté -->
    <div class="last-chapter-text">
        <h1>
            <?php echo ("Titre du dernier chapitre paru");/* INSÉRER LE TITRE DU DERNIER POST */ ?>
        </h1>

        <p class="last-chapter-datetime">Dernier chapitre publié le <?php echo ("17/06/2020") /* INSÉRER LA DATE DU DERNIER POST */ ?></p>

        <p class="last-chapter-extract">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Hic pariatur ullam neque aliquam cum. Dolorem corrupti earum delectus molestias ipsa error, perferendis laboriosam neque voluptatem sunt vitae minus iure quia!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt animi eum repellat sapiente exercitationem a corporis atque accusamus, corrupti illo eos magnam, natus illum tempora voluptatibus, quae necessitatibus enim quis.<br />
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae beatae porro tenetur sequi sed dolor exercitationem molestias. Amet error ullam fuga magni delectus commodi. Optio iure esse repellat ipsum accusantium.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ab qui sed impedit numquam error possimus perferendis, corporis unde? Eligendi impedit praesentium ipsum obcaecati neque. Magnam sequi consectetur dicta quaerat.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore velit impedit quaerat dicta a sit, ab eos quo ipsum dolorem temporibus maxime beatae! Excepturi eligendi iusto repudiandae iure minima debitis.
        </p>

        <button>Lire la suite</button>
    </div>

    <!-- illustration du dernier chapitre -->
    <div class="last-chapter-img">
        <img src="public/images/pic1920.jpg" alt="image" />
    </div>
</section>

<section id="list-chapters">
    <h2>
        Anciens chapitres publiés
    </h2>
    <!-- Extraits des chapitres dans l'ordre d'apparition du plus récent au plus ancien -->
    <ul class="chapter-gallery">
        <li class="old-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre test test</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa suscipit in explicabo animi quos, impedit, aperiam quisquam aut vero necessitatibus corrupti, deserunt at ex recusandae cupiditate similique asperiores architecto? Molestias.
            </p>
            <button>Lire</button>
        </li>
        <li class="old-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="old-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="old-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="old-chapter">
            <img src="public/images/pic1280.jpg" alt="image" />

            <h3>Titre chapitre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis vitae, nemo sunt maiores dicta libero quidem esse facere minima?...</p>
            <button>Lire</button>
        </li>
        <li class="old-chapter">
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
