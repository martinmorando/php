<?php
/*
	Functions names in camel case: buyBitcoin()
	Variable names in snake case: $buy_bitcoin
*/
function jump() {
	return 1; // Function stops here
	echo "jump"; // Won't get printed
}

function run() {
	return "run";
}

function walk() {
	return "walk";
}

function walkAndRun() {
	echo walk();
	echo run();
}

walkAndRun();

function anotherUselessFunction() {
	echo 1; // No return? Returns NULL
}


// Pass by reference
function unmask(&$name) {
	$name = "Bruce Wayne";
}
$name = "Batman";
echo $name;
unmask($name);
echo $name;
?>