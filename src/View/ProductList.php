
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des articles</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v) {
                echo "<p>";
                
                
                echo "Article " . "<a href=\"Routeur.php?action=read&article=" . $v->getId() . "\">" . $v->getId() . "</a>";
                
                echo "</p>"; 
            }             
        ?> 
    </body>
</html>