<!-- Vue détaillée d'un chapitre et de ses commentaires (user) -->

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
        <?= $chapter["content"]; ?>
    </p>
</section>

<section id="current-chapter-comments">
    <h2>Commentaires</h2>

    <div class="comments-part">
        <form action="index.php?action=addComment&id=<?= $chapter["id"] ?>" method="post" class="comment-form">
            <div class="comment-user">
                <input type="text" id="author" name="author" placeholder="Nom" minlength="4" maxlength="40" spellcheck="false" required />

                <input type="email" id="email" name="email" placeholder="Email" minlength="8" maxlength="40" spellcheck="false" required />
            </div>

            <textarea id="comment" name="comment" placeholder="Ajouter un commentaire" minlength="1" maxlength="1500"></textarea>

            <div class="comment-sending">
                <div><input type="checkbox" name="human" id="human" required /><label for="human">Je suis un humain</label></div>

                <input type="submit" value="Envoyer le message" />
            </div>
        </form>

        <div class="comments-list">
            <ul>
                <?php
                while ($comment = $comments->fetch()) {
                ?>
                    <li>
                        <div class="comment-title">
                            <p class="comment-user-datetime"><strong><?= htmlspecialchars($comment["author"]) ?></strong> - <em>Le <?= $comment["comment_date_fr"] ?></em></p> <span class="comment-report"><a href="index.php?action=reportComment?id=<?= $comment["id"] ?>">Signaler <i class="fas fa-exclamation-triangle"></i></a></span>
                        </div>
                        <p class="comment-text">
                            <?= nl2br(htmlspecialchars($comment["comment"])) ?>
                        </p>
                    </li>
                <?php
                }
                $comments->closeCursor();
                ?>
            </ul>
        </div>
    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");
