<?php
/*
 Install: `sudo apt install php8.3-cli`
*/
$a = "It is";
$b = "so simple";

// Alternative A
$message = $a . " " . $b;

// Alternative B
$message = "$a $b";

// Alternative C
$message = "${a} ${b}";

echo $message;
?>