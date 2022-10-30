<?php

$menuPage = [
    "Accueil" => "index.php",
    "Blog" => "blog.php",
    "Se connecter" => "connection.php",
    "S'inscrire" => "inscription.php",
];

$menuFooter = [
    "RGPD" => "rgpd.php",
    "Mentions légales" => "rgpd.php",
    "Contact" => "contact.php",
];

function afficherMenu ($menuPage){
    "<div class='navBar'>";
    "<ul>";
foreach ($menuPage as $key => $value) {
   echo '<li> <a href="' .$value. '"> '.$key.' </a> </li>';
};
"</ul>";
"</div>";
};


?>