<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des articles</title>
    </head>
    <body>
        <?php
                echo "<p>";
                echo "Article " . $v->getId() . " de marque " . $v->getBrand() . " et au prix de  " . $v->getPrice() . ")";
                echo "</p>";
        ?> 
    </body>
</html>