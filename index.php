<?php
$produit=[
    "Robe",
    "Jupe",
    "Pantalon",
    "Blouse",
    "Hijab",
    "Khimar",
    "Abaya",
    "Veste",
    "Manteau",
    "Accessoire",
]
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
    <h2>Nos articles</h2>
    <form action="index.php" method="$_GET">
        <label for="produit">Rechercher un article <input type="text" id="produit" name="produit" ></label>
        <input type="submit" value="Rechercher">
    </form>

    <?php "<ul>";
    foreach ($produit as $key => $value) {
        if (!isset($_GET["produit"]) || isset($_GET["produit"]) && strtolower($_GET["produit"]) === strtolower($value)) {
           echo "<li>" .$value. "</li>"; 
        }
        
    }
    ?> </ul>
    
    </section>

    <footer>
        &copy;Marlee
        <?php
        afficherMenu($menuFooter)
        ?>
    </footer>

</body>

</html>