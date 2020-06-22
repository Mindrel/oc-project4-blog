<?php $title = htmlspecialchars($chapter["title"]); ?>

<?php ob_start(); ?>

<section id="current-chapter">
    <!-- Dernier chapitre posté -->
    <h1>
        <?= htmlspecialchars($chapter["title"]) ?>
    </h1>

    <p class="current-chapter-datetime">Chapitre publié le <?= $chapter["creation_date_fr"] ?></p>

    <!-- illustration du dernier chapitre -->
    <div class="current-chapter-img">
        <img src="<?= htmlspecialchars($chapter["image_path"]) ?>" alt="illustration" />
    </div>

    <p class="current-chapter-text">
        <?= nl2br(htmlspecialchars($chapter["content"])); ?>
    </p>
</section>

<section id="current-chapter-comments">
    <h2>Commentaires</h2>

    <div class="comments-part">
        <form action="#" method="post" class="comment-form">
            <div class="comment-user">
                <input type="text" id="name" name="name" placeholder="Nom" minlength="4" maxlength="40" required />

                <input type="email" id="email" name="email" placeholder="Email" required />
            </div>

            <textarea name="message" placeholder="Ajouter un commentaire"></textarea>

            <div class="comment-sending">
                <div><input type="checkbox" name="human" id="human" required /><label for="human">Je suis un humain</label></div>

                <input type="submit" value="Envoyer le message" />
            </div>
        </form>

        <div class="comments-list">
            <ul>
                <li>
                    <div class="comment-title">
                        <p class="comment-user-datetime"><strong>coucoudu66</strong> - <em>Le 20/06/2020 à 22h39</em></p> <span class="comment-report"><a href="#">Signaler <i class="fas fa-exclamation-triangle"></i></a></span>
                    </div>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis commodi corporis, quisquam deserunt asperiores harum earum sed quae, repudiandae animi labore sequi fuga soluta iure. Voluptate natus aspernatur saepe quaerat.
                    </p>
                </li>

                <li>
                    <div class="comment-title">
                        <p class="comment-user-datetime"><strong>coucoudu66</strong> - <em>Le 20/06/2020 à 22h39</em></p> <span class="comment-report"><a href="#">Signaler <i class="fas fa-exclamation-triangle"></i></a></span>
                    </div>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis commodi corporis, quisquam deserunt asperiores harum earum sed quae, repudiandae animi labore sequi fuga soluta iure. Voluptate natus aspernatur saepe quaerat.
                    </p>
                </li>

                <li>
                    <div class="comment-title">
                        <p class="comment-user-datetime"><strong>coucoudu66</strong> - <em>Le 20/06/2020 à 22h39</em></p> <span class="comment-report"><a href="#">Signaler <i class="fas fa-exclamation-triangle"></i></a></span>
                    </div>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis commodi corporis, quisquam deserunt asperiores harum earum sed quae, repudiandae animi labore sequi fuga soluta iure. Voluptate natus aspernatur saepe quaerat.
                    </p>
                </li>

                <li>
                    <div class="comment-title">
                        <p class="comment-user-datetime"><strong>coucoudu66</strong> - <em>Le 20/06/2020 à 22h39</em></p> <span class="comment-report"><a href="#">Signaler <i class="fas fa-exclamation-triangle"></i></a></span>
                    </div>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis commodi corporis, quisquam deserunt asperiores harum earum sed quae, repudiandae animi labore sequi fuga soluta iure. Voluptate natus aspernatur saepe quaerat.
                    </p>
                </li>
        </div>
    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
