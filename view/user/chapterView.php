<?php $title = "TITRE DU CHAPITRE"; ?>

<?php ob_start(); ?>

<section id="current-chapter">
    <!-- Dernier chapitre posté -->
    <h1>
        <?php echo ("Titre du chapitre"); /* INSERER TITRE DU CHAPITRE EN COURS */ ?>
    </h1>

    <p class="current-chapter-datetime">Chapitre publié le <?php echo ("17/06/2020") /* INSÉRER LA DATE DU DERNIER POST */ ?></p>

    <!-- illustration du dernier chapitre -->
    <div class="current-chapter-img">
        <img src="public/images/pic1.jpg" alt="image" />
    </div>

    <p class="last-chapter-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Hic pariatur ullam neque aliquam cum. Dolorem corrupti earum delectus molestias ipsa error, perferendis laboriosam neque voluptatem sunt vitae minus iure quia!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt animi eum repellat sapiente exercitationem a corporis atque accusamus, corrupti illo eos magnam, natus illum tempora voluptatibus, quae necessitatibus enim quis.<br /><br />
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae beatae porro tenetur sequi sed dolor exercitationem molestias. Amet error ullam fuga magni delectus commodi. Optio iure esse repellat ipsum accusantium.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ab qui sed impedit numquam error possimus perferendis, corporis unde? Eligendi impedit praesentium ipsum obcaecati neque. Magnam sequi consectetur dicta quaerat.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore velit impedit quaerat dicta a sit, ab eos quo ipsum dolorem temporibus maxime beatae! Excepturi eligendi iusto repudiandae iure minima debitis.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas et consequatur voluptatem obcaecati vitae architecto sunt rem unde ea, atque dolor voluptatum assumenda! Dicta reprehenderit odit voluptatibus, eligendi earum quisquam?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt beatae dolores ducimus iusto impedit dicta modi quisquam vitae reprehenderit asperiores, mollitia autem ad deleniti error provident omnis quod tenetur dolore?<br />
    </p>
</section>

<section id="current-chapter-comments">
    <h2>Commentaires</h2>

    <div>
        <form>

        </form>

        <div class="comments">

        </div>
    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
