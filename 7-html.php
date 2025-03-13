<?php
/*
    Use PHP with HTML
*/
$title = "Keep going";
$description = "The possibilities are endless";
$letters = array("a", "b", "c");
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- PHP shorthand. This comment will be seen by the user -->
        <title><?=$title?></title>
    </head>
    <body>
        <h1><?=$description?></h1>
        <ul>
            <!--
              PHP shorthand syntax for control structures to improve readability:
                - foreach: endforeach;
                - for: endfor;
                - while: endwhile;                
                - switch: endswitch;
                - if: endif;
                - do: while(...);          
            -->
            <?php foreach ($letters as $letter): ?>
                <li><?=$letter?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>