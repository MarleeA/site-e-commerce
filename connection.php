<?php

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
        <form action="connexion.php" method="post">
            <h2>Se connecter</h2>
            <label for="email">Email <input type="email" id="email" name="email"> </label>
            <label for="name">Mot de passe<input type="password" id="password" name="password"> </label>
            <input type="submit" value="Se connecter">

        </form>
    </section>

    <footer>
        &copy;Marlee
        <?php
        afficherMenu($menuFooter)
        ?>
    </footer>

</body>

</html>

<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        margin: 5px;
    }
</style>