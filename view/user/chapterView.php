<?php $title = "TITRE DU CHAPITRE"; ?>

<?php ob_start(); ?>

<section id="current-chapter">
    <!-- Dernier chapitre posté -->
    <h1>
        <?php echo ("Titre du chapitre BLA BLA BLA BLA BLA BLA"); /* INSERER TITRE DU CHAPITRE EN COURS */ ?>
    </h1>

    <p class="current-chapter-datetime">Chapitre publié le <?php echo ("17/06/2020") /* INSÉRER LA DATE DU DERNIER POST */ ?></p>

    <!-- illustration du dernier chapitre -->
    <div class="current-chapter-img">
        <img src="public/images/pic1920.jpg" alt="image" />
    </div>

    <p class="current-chapter-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Hic pariatur ullam neque aliquam cum. Dolorem corrupti earum delectus molestias ipsa error, perferendis laboriosam neque voluptatem sunt vitae minus iure quia!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt animi eum repellat sapiente exercitationem a corporis atque accusamus, corrupti illo eos magnam, natus illum tempora voluptatibus, quae necessitatibus enim quis.<br />
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae beatae porro tenetur sequi sed dolor exercitationem molestias. Amet error ullam fuga magni delectus commodi. Optio iure esse repellat ipsum accusantium.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ab qui sed impedit numquam error possimus perferendis, corporis unde? Eligendi impedit praesentium ipsum obcaecati neque. Magnam sequi consectetur dicta quaerat.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore velit impedit quaerat dicta a sit, ab eos quo ipsum dolorem temporibus maxime beatae! Excepturi eligendi iusto repudiandae iure minima debitis.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas et consequatur voluptatem obcaecati vitae architecto sunt rem unde ea, atque dolor voluptatum assumenda! Dicta reprehenderit odit voluptatibus, eligendi earum quisquam?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt beatae dolores ducimus iusto impedit dicta modi quisquam vitae reprehenderit asperiores, mollitia autem ad deleniti error provident omnis quod tenetur dolore?<br />
    </p>

    <p class="current-chapter-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Hic pariatur ullam neque aliquam cum. Dolorem corrupti earum delectus molestias ipsa error, perferendis laboriosam neque voluptatem sunt vitae minus iure quia!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt animi eum repellat sapiente exercitationem a corporis atque accusamus, corrupti illo eos magnam, natus illum tempora voluptatibus, quae necessitatibus enim quis.<br />
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
        <form action="#" method="post">
            <div class="comment-user">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Nom" required />

                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email" required />
            </div>

            <textarea name="message" rows="8" cols="40" placeholder="Tapez votre message"></textarea>

            <div class="comment-sending">
                <input type="checkbox" name="human" id="human" required /><label for="human">Je suis un humain</label>

                <input type="submit" value="Envoyer le message" />

            </div>


        </form>

        <div class="comments-list">

        </div>
    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
