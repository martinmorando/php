<?php
/*
	Numbers
*/
$a = 1; // Integer
$b = 2.33; // Float
$c = $a * $b; // Float

if (is_int($a)) {
	echo $a . " is an integer.\n";
}

if (is_float($b)) {
	echo $b . " is a float.\n";
}


# Increment and decrement operators
$a++;
$a--;


# Compound assignment operators
$a += $b; // $a = $a + $b;
$a *= $b;
$a /= $b;
$a %= $b;
$a **= $b; // $a = $a ** $b;
?>