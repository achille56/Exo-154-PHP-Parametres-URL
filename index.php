

/**
 * Exo 1
 * ------
 * 1. Créez une nouvelle page 'exo1.php'
 * 2. Créez un lien dans index.php ( ici ) qui passe le paramètre 'iteration' avec pour valeur 10 à cette page.
 * 3. Traitez tous les paramètres pour vous prémunir des petits malins.
 * 4. Faites une boucle pour afficher autant de fois Hello World 10 fois en utilisant 'iteration' dans la boucle.
 */

// TODO Votre code ici.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <ul>
        <li><a href="exo1.php?iteration=10">Lien 1</a></li>
    </ul>
</body>

</html>

<?php

echo "<br><br>";

?>

/**
 * Exo 2
 * ------
 * Faites exactement la même chose que pour l'exercice 1, mais le nouveau fichier sera nommé exo2.php
 * Créez au moins 10 liens à l'aide d'une boucle !!!
 * Pour chaque lien, le paramètre iteration prendra la valeur actuelle de votre variable de boucle ( $i par exemple ).
 */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <ul>
        <li><a href="exo2.php?iteration=10">Lien 2</a></li>
    </ul>
</body>

</html>



