
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des articles</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v2) {
                foreach ($v2 as $v) {
                    echo "<p>";

                    echo "Article " . "<a href=\"Router.php?action=read&article=" . $v->getValue()['id'] . "\">" . $v->getValue()['id'] . "</a>";

                    echo "</p>";
                }
            }             
        ?> 
    </body>
</html>