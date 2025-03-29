<?php
/*
    Files
*/

$file_path = "new_file.txt";

// [FILE_PUT_CONTENTS]
// + [CREATE FILE]
// - If the file does not exist, create it.
// - If the file exists, overwrite the data in it.
$content_a = "BIIIIIIIIIITTTTTTTCCCCCCOOOOOOOOIIIIIINNNNNNNNN";
if (file_put_contents($file_path, $content_a) !== false) {
    echo "Done";
} else {
    echo "Error";
}

// + [APPEND TO FILE]
// - If the file does not exist, create it.
// - If the file exists, append data to it.
$content_b = "\nI'm appended";
if (file_put_contents($file_path, $content_b, FILE_APPEND) !== false) {
    echo "Done";
} else {
    echo "Error";
}
?>