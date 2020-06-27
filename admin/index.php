<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <script src="https://kit.fontawesome.com/bb97965415.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../private/assets/css/main.css" />
    <link rel="stylesheet" href="../private/assets/css/sidebar.css" />
    <link rel="stylesheet" href="../private/assets/css/dashboard.css" />
    <title>Interface d'administration</title>
</head>

<body>
    <!-- Menu sidebar -->
    <div id="sidebar">
        <div class="sidebar-menu">
            <h2>Menu</h2>

            <nav>
                <ul>
                    <li><a href="#">Tableau de bord</a></li>
                    <li><a href="#">Créer un nouveau chapitre</a></li>
                    <li><a href="#">Modifier ou supprimer des chapitres</a></li>
                    <li><a href="#">Modérer les commentaires</a></li>
                </ul>
            </nav>
        </div>

        <div class="sidebar-footer">
            <p><a href="../"><i class="fas fa-arrow-left"></i> Retour au site</a></p>
        </div>
    </div>

    <div class="container">
        <section>
            <h1>Tableau de bord</h1>

            <h2>Les cinq derniers chapitres</h2>
            <table id="last-chapters-table">
                <thead>
                    <tr>
                        <th class="chapter-number-col">N°</th>
                        <th class="chapter-date-col">Date</th>
                        <th class="chapter-title-col">Titre</th>
                        <th class="chapter-extract-col">Extrait</th>
                        <th class="chapter-access-col">Accéder</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="chapter-number-cell">
                            <!-- php numéro chapitre -->10
                        </td>
                        <td class="chapter-date-cell">
                            <!-- php date chap -->01/01/2020
                        </td>
                        <td class="chapter-title-cell">
                            <!-- php titre chapitre -->Coucou ça va
                        </td>
                        <td class="chapter-extract-cell">
                            <!-- php extrait chap --> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus recusandae voluptatum molestias magnam quae similique voluptas et doloribus dolorem, laboriosam reprehenderit deserunt quos maxime asperiores. Ea modi a vitae error. klhdajzklh dh jh zeadhze dj hdejzh h dij
                        </td>
                        <td class="chapter-access-cell">
                            <a href="#"><i class="fas fa-book-open"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>Les dix derniers commentaires</h2>

            <table id="last-comments-table">
                <thead>
                    <tr>
                        <th class="comment-date-col">Date/heure</th>
                        <th class="comment-nochapter-col">N° chap.</th>
                        <th class="comment-author-col">Auteur</th>
                        <th class="comment-email-col">Email</th>
                        <th class="comment-extract-col">Extrait</th>
                        <th class="comment-edit-col">Modifier</th>
                        <th class="comment-delete-col">Supprimer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="comment-date-cell">
                            <!-- php date com -->01/01/2020 - 21h23
                        </td>
                        <td class="comment-nochapter-cell">
                            <!-- php id chap -->10
                        </td>
                        <td class="comment-author-cell">
                            <!-- php auteur com -->Jean Loouiis
                        </td>
                        <td class="comment-email-cell">
                            <!-- php email com -->test@lolilol.com
                        </td>
                        <td class="comment-extract-cell">
                            <!-- php extrait com --> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempora temporibus repudiandae quasi assumenda eius quaerat quibusdam, animi blanditiis quia quidem soluta molestiae minus laborum ad at laudantium, unde voluptatem.
                        </td>
                        <td class="comment-edit-cell">
                            <a href="#LIEN MODIFIER COM"><i class="fas fa-edit"></i></a>
                        </td>
                        <td class="comment-delete-cell">
                            <a href="#LIEN SUPPRIMER COM"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>


        </section>

        <!-- Contenu principal -->



    </div>

</body>


</html>