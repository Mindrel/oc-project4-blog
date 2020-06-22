<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Bienvenue sur le blog de l'écrivain Jean Forteroche. Suivez l'histoire de son dernier roman chapitre après chapitre et donnez votre avis !" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <script src="https://kit.fontawesome.com/bb97965415.js" crossorigin="anonymous"></script>
    <script src="public/assets/js/sidebar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/main.css" />
    <link rel="stylesheet" href="public/assets/css/sidebar.css" />
    <link rel="stylesheet" href="public/assets/css/header.css" />
    <link rel="stylesheet" href="public/assets/css/lastchapter.css" /> <!-- CSS SECTION 1 PAGE ACCUEIL -->
    <link rel="stylesheet" href="public/assets/css/chapterslist.css" /><!-- CSS SECTION 2 PAGE ACCUEIL -->
    <link rel="stylesheet" href="public/assets/css/about.css" /><!-- CSS SECTION 3 PAGE ACCUEIL-->
    <link rel="stylesheet" href="public/assets/css/chapterpage.css" /><!-- PAGE CHAPITRE -->
    <!-- CSS ADMIN ? -->
    <title><?= $title ?></title> <!-- Titre varie suivant la page affichée -->
</head>

<body>
    <!-- Menu sidebar -->
    <div id="sidebar">
        <!-- Bouton ouverture fermeture sidebar -->
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="sidebar-menu">
            <h3>Menu</h3>

            <nav>
                <ul>
                    <li><a href="index.php#" onclick="toggleSidebar()">Accueil</a></li>
                    <li><a href="index.php#previous-chapters-list" onclick="toggleSidebar()">Précédents chapitres</a></li>
                    <li><a href="index.php#about" onclick="toggleSidebar()">À propos de l'auteur</a></li>
                </ul>
            </nav>
        </div>

        <div class="sidebar-footer">
            <p><a href="#">Administration</a></p>
            <p>
                2020 - Michel MARTIN - Le blog de Jean Forteroche<br />
                Site fictif - DWJ Projet 4 pour OpenClassrooms
            </p>
        </div>
    </div>

    <div class="container">
        <header>
            <div id="logo">
                <a href="index.php"><img src="public/images/logo.png" alt="Logo blog Jean Forteroche" /></a>
                <p><strong>Billet simple pour l'Alaska</strong> par Jean Forteroche</p>
            </div>

            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </header>

        <!-- Contenu principal -->
        <?= $content ?>

    </div>

</body>


</html>