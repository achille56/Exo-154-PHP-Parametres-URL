<?php

// on verifie si "iteration" est présente dans l'URL, si c'est pas le cas on signale une erreur.
if (!isset($_GET["iteration"])) {
    header('Location: index.php?error=1');
}

// convertit la variable "iteration" en entier.
$iteration = intval($_GET['iteration']);

// Cette condition vérifie si la variable $iteration dépasse une limite maximale de 1000, et si c'est le cas, la limite
// est fixée à 1000. De même, si la valeur de la variable est inférieure ou égale à 0, elle est remise à 1 pour éviter
// les erreurs.
if ($iteration > 1000) {
    $iteration = 1000;
}
elseif ($iteration <= 0) {
    $iteration = 1;
}

for ($i = 0; $i < $iteration; $i++) {
    echo "Hello World<br>";
}
