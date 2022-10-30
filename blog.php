<?php
$articles = [
    "Article 1" => ["titre" => "Article 1", "contenu" => "blablabla", "date" => "1 Septembre 2021", "auteur" => "Marlee ALCARAZ", "categorie" => "news"],
    "Article 2" => ["titre" => "Article 2", "contenu" => "blablabla", "date" => "2 Octobre 2021", "auteur" => "Marlee ALCARAZ", "categorie" => "tipsMode"],
    "Article 3" => ["titre" => "Article 3", "contenu" => "blablabla", "date" => "3 Novembre 2021", "auteur" => "Jamal AJAID", "categorie" => "evenement"],
    "Article 4" => ["titre" => "Article 4", "contenu" => "blablabla", "date" => "4 Décembre 2021", "auteur" => "Marlee ALCARAZ", "categorie" => "tipsMode"],
    "Article 5" => ["titre" => "Article 5", "contenu" => "blablabla", "date" => "5 Janvier 2022", "auteur" => "Jamal AJAID", "categorie" => "evenement"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <nav>

        <?php
        include __DIR__ . "/menu.php";
        afficherMenu($menuPage)
        ?>

    </nav>

    <section>
        <h1>Nos articles</h1>

        <h2>Trier par thème</h2>
        <ul>
            <li><a href="blog.php"> Toutes catégories</a></li>
            <li><a href="blog.php?categorie=news">Nouveautés </a></li>
            <li><a href="blog.php?categorie=tipsMode">Tips Mode</a></li>
            <li><a href="blog.php?categorie=evenement">Evènement</a></li>
        </ul>

        <article>
            <?php
            foreach ($articles as $key => $value) {

                if (
                    !isset($_GET["categorie"])
                    ||  (isset($_GET["categorie"]) && $_GET["categorie"]  === $value["categorie"])
                ) {
                    echo '<h2>' . $value['titre'] . '</h2>';
                    echo '<p>' . $value['date'] . '</p>';
                    echo '<p>' . $value['contenu'] . '</p>';
                    echo '<p>' . $value['auteur'] . '</p>';
                }
            }
            ?>
        </article>
    </section>

    <footer>
        &copy;Marlee
        <?php
        afficherMenu($menuFooter)
        ?>
    </footer>

</body>

</html>