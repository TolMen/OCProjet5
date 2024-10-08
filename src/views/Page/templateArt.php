<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="mobile-web-app-capable" content="yes" />
        <!-- Useful tag -->
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../../../assets/img/logo.png"
        />
        <title>Article</title>
        <meta
            name="description"
            content="Page pour les articles du blog de Jessy."
        />
        <!-- CSS -->
        <link rel="stylesheet" href="../CSS/styleArticles/templateArt.css">
    </head>
    <body>
        <!-- Page header -->
        <header>
            <div class="boxLogo">
                <img src="../../../assets/img/logo.png" alt="Logo" />
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="previewArtUser.php">Articles</a></li>
                    <li>
                        <a href="../../control/UserControl/userStop.php"
                            >Déconnexion</a
                        >
                    </li>
                </ul>
            </nav>
        </header>
        <!-- End of Page Header -->

        <!-- Middle of the page -->
        <section class="infoArticle">
            <!-- Include the controller and avoid logic in the view -->
            <?php include '../../control/ArtControl/postArt.php'; ?>
            <i class="separator"></i>
            <div class="secCom">
                <h2 class="titleCom">Commentaires</h2>
                <?php include '../../control/ComControl/postCom.php'; ?>
            </div>
            <i class="separator"></i>
        </section>
        <!-- End of Middle of Page -->

        <!-- Footer -->
        <footer>
            <div class="boxFooter">
                <nav class="boxNetwork">
                    <ul>
                        <li>
                            <a
                                target="_blank"
                                href="https://www.linkedin.com/in/jessyfrachisse/"
                                ><ion-icon name="logo-linkedin"></ion-icon
                            ></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/TolMen"
                                ><ion-icon name="logo-github"></ion-icon
                            ></a>
                        </li>
                        <li>
                            <a
                                href="../../../assets/DLs/CV_Jessy.pdf"
                                download="CV_Jessy.pdf"
                                ><ion-icon
                                    name="arrow-down-circle-outline"
                                ></ion-icon
                            ></a>
                        </li>
                        <!-- Add li + a for another network -->
                    </ul>
                </nav>
                <p>©2024 Jessy.F | Tous les droits sont réservés</p>
            </div>
        </footer>
        <!-- End of footer -->

        <!-- Script for icons -->
        <script
            type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
    </body>
</html>
