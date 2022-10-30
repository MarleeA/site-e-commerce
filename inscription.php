<?php
$error = false;

function verification()
{
    $verif_ok = true;

    if (isset($_POST["nom"]) && $_POST["nom"] != "") {
    } else {
        $verif_ok = false;
    };

    if (isset($_POST["prenom"]) && $_POST["prenom"] != "") {
    } else {
        $verif_ok = false;
    };

    if (isset($_POST["email"]) && $_POST["email"] != "") {
    } else {
        $verif_ok = false;
    };

    if (isset($_POST["password"]) && $_POST["password"] != "") {
    } else {
        $verif_ok = false;
    };
    return $verif_ok;
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = verification();

    if ($result) {
        header("Location: connection.php");
        exit();
    } else {
        $error = true;
    };
};
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
        <form action="inscription.php" method="post" name="">

            <?php if ($error) { ?>
                <p class="error">Erreur</p>
            <?php } ?>
            
            <h2>S'inscrire</h2>
            <label for="nom">Nom <input type="text" id="nom" name="nom"> </label>
            <label for="prenom">Prénom <input type="text" id="prenom" name="prenom"> </label>
            <label for="photo">Photo <input type="file" id="photo" name="photo"> </label>
            <label for="email">Email <input type="email" id="email" name="email"> </label>
            <label for="password">Mot de passe <input type="password" id="password" name="password"> </label>
            <input class="submit" type="submit" value="Envoyer">
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
    p.error {
        color: red;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        margin: 5px;
    }
</style>