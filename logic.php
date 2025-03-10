<?php
/*
	Logic
*/

$a = 1;
$b = 2;
$c = true; // Also valid True and TRUE. Laravel, WordPress, Meta seem to use lowercase. Codecademy uses uppercase. CodeIgniter seems to mix them


// Conditional
if ($a > $b) {
	echo "\na > b";
} elseif ($a < $b) {
	echo "\na < b";
} else {
	echo "\na = b";
}


// Identical operator
if ($a === $b) {
	echo "\nequal";
} else {
	echo "\nnot equal";
}


// Ternary operator (conditionally return a value)
$cond = $a !== $b ? "\nnot equal" : "\nequal";


// Truthy, falsy. Most values and expressions are treated as truthy even though they are not boolean values. Treated as falsy: 0, "0", null, empty strings, empty arrays, undefined variable
if (0) {
	echo "\nThis will never happen.";
}


// Switch. If there's no break, it will continue to the next case
$currency = "BTC";
switch ($currency) {
	case "ADA":
	case "XRP":
	case "ETH":
		echo "\nShitcoin";
		break;
	case "BTC":
		echo "\nHard money";
		break;
	default:
		echo "Better than BTC!? Hmm... Why?";
		break;
}
?>