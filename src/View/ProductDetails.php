<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Article</title>
    </head>
    <body>
        <?php

        if ($v != []) {
            echo "<h1>" . $v['name'] . "</h1>";
            echo "<ul>";
            echo "<li>Marque    : " . $v['brand'] . "</li>";
            echo "<li>Prix      : " . $v['price'] . " euros</li>";
            echo "<li>Détails   : " . $v['details'] . "</li>";
            echo "</ul>";
        }
        else {
            echo "L'identifiant donné ne correspond à aucun article.";
        }
        ?> 
    </body>
</html>