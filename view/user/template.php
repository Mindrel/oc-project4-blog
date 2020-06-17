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
    <!-- CSS SECTION 1 -->
    <!-- CSS SECTION 2 -->
    <!-- CSS CHAPITRE ? -->
    <!-- CSS ADMIN ? -->
    <title><?= $title ?></title> <!-- Titre varie suivant la page affichée -->
</head>

<body>
    <!-- Menu sidebar -->
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="sidebar-menu">
            <h3>Menu</h3>

            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#">Chapitres</a></li>
                    <li><a href="#">À propos</a></li>
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
                <p><strong>Titre du roman</strong> <em>par Jean Forteroche</em></p>
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