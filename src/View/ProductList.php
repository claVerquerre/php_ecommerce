
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des articles</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v2) {
                echo "<ul>";
                foreach ($v2 as $v) {
                    echo "<li>";
                    echo "<a href=\"?action=read&article=" . $v->getValue()['id'] . "\">" . $v->getValue()['name'] . "</a>";
                    echo "</li>";
                }
                echo "</ul>";
            }             
        ?> 
    </body>
</html>