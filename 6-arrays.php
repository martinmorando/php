<?php
/*
   Arrays
    - 0 based-index
    - Using "$a" as name of the array to focus on the rest
*/

// [Create]
// Alternative A
$a = array(1, 2, 3, 4, 5, "New York");  // Mixed data types

// Alternative B
$a = [1, 2, 3, 4, 5, "New York"];



// [Print]
// Wrong way to print it. Won't work: 'PHP Warning: Array to string conversion'
// echo $a;

// One way, very useful to visualize it
print_r($a);

// Another way, separated by a comma and a space
echo "\n" . implode(", ", $a);

// Another way
var_dump($a);



// [Access, replace and count]
// Access first element
echo "\nAccess first element: " . $a[0];

// Replace second element with 3
$a[1] = 3;

// Count elements
echo "\nCount elements: " . count($a);



// [Remove]
// Remove first element and shift (move) down an index. Returns element removed
echo "\nRemove first element: " . array_shift($a);

// Remove last element. Returns the element removed
echo "\nRemove last element: "  . array_pop($a);



// [Add]
// Add elements to the beginning and moves the rest. Returns new number of elements
echo "\nAdd elements to the beginning: " . array_unshift($a, "A", "BB", "CCC");

// Add element to the end
$a[] = 6;

// Add element/s to the end. Returns new number of elements
echo "\nAdd single element: "    . array_push($a, "programmers");
echo "\nAdd multiple elements: " . array_push($a, "codebreakers", "hackers"); 
?>