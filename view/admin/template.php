<!DOCTYPE html>

<!-- admin template -->

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <script src="https://kit.fontawesome.com/bb97965415.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/m2ky4f6j2ladpnyn2hqrhjqozw1lz9riowwb4sptsebbl3ab/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="../../private/assets/js/tinymce.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../private/assets/css/main.css" />
    <link rel="stylesheet" href="../../private/assets/css/sidebar.css" />
    <link rel="stylesheet" href="../../private/assets/css/admincontent.css" />
    <link rel="stylesheet" href="../../private/assets/css/error.css" />
    <title>Interface d'administration</title>
</head>

<body>
    <!-- Menu sidebar -->
    <div id="sidebar">
        <div class="sidebar-menu">
            <h2>Menu</h2>

            <nav>
                <ul>
                    <li><a href="index.php">Tableau de bord</a></li>
                    <li><a href="index.php?action=allChapters">Liste des chapitres</a></li>
                    <li><a href="#">Créer un nouveau chapitre</a></li>
                    <li><a href="index.php?action=allComments">Modérer les commentaires</a></li>
                </ul>
            </nav>
        </div>

        <div class="sidebar-footer">
            <p><a href="../../"><i class="fas fa-arrow-left"></i> Retour au site</a></p>
        </div>
    </div>

    <div class="container">
        <section>

            <!-- Contenu principal -->
            <?= $content ?>

        </section>
    </div>

</body>

</html>