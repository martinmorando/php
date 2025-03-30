<?php
/*
    Files
    - file_get_contents(): reads contents of a file
    - file_put_contents()
        - default: writes (or overwrites)
        - with FILE_APPEND: appends data (or writes)
*/

$file_path = "new_file.txt";

// [CREATE FILE]
// - If the file does not exist, create it.
// - If the file exists, overwrite it.
$content_a = "BIIIIIIIIIITTTTTTTCCCCCCOOOOOOOOIIIIIINNNNNNNNN";
if (file_put_contents($file_path, $content_a) !== false) {
    echo "Done";
} else {
    echo "Error";
}



// [APPEND TO FILE]
// - If the file does not exist, create it.
// - If the file exists, append data to it.
$content_b = "\nI'm appended";
if (file_put_contents($file_path, $content_b, FILE_APPEND) !== false) {
    echo "Done";
} else {
    echo "Error";
}



// [READ FILE]
// - If the file does not exist, returns false.
// - If the file exists, returns its content.
$content = file_get_contents($file_path);
if($content === false) {    // Handle error in case file does not exist
    echo "File not found";
} else {
    echo $content;
}
?>