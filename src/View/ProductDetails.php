<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des articles</title>
    </head>
    <body>
        <?php
                echo "<p>";
                echo "Article " . $v['id'] . " de marque " . $v['brand'] . " et au prix de  " . $v['price'] ;
                echo "</p>";
        ?> 
    </body>
</html>