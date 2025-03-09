<?php
/*
	Numbers
*/

// Integer and float
$a = 1; // Integer
$b = 2.33; // Float
$c = $a * $b; // Float

# Increment and decrement operators
$a++;
$a--;

# Compound assignment operators
$a += $b; // $a = $a + $b;
$a *= $b;
$a /= $b;
$a %= $b;
$a **= $b; // $a = $a ** $b;

# Some built-in functions related to numbers
$d = -25.224; // Float
echo "\nNumber: " 									. $d;
echo "\nCheck if its a number: "					. (is_numeric($d) ? "yes" : "no");
echo "\nCheck if its a float: "						. (is_float($d) ? "yes" : "no");
echo "\nCheck if its an integer: "					. (is_int($d) ? "yes": "no");
echo "\nRound to nearest integer: " 		 		. round($d);
echo "\nRound to 2 decimal places: "		 		. round($d, 2);
echo "\nRound down to the nearest integer: " 		. floor($d);
echo "\nRound up to the nearest integer: "   		. ceil($d);
echo "\nAbsolute: "							 		. abs($d);
echo "\nSquare root (after abs()): "		 		. sqrt(abs($d));
echo "\n";
echo "\nRaise n to the power of m: "			 	. pow(5, 2);
echo "\nRandom int between 2 integers inclusive: "	. rand(1,10);
echo "\nMin between arguments: " 			 		. min(1,2,3);
echo "\nMax between arguments: "				 	. max(1,2,3);
echo "\n";
echo "\nValue of pi: " 				 		 		. pi();
echo "\nValue of e: " 								. M_E;
echo "\n";
?>