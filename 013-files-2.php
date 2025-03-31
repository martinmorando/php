<?php
/*
    Files 2
    - Alternative to file_get_contents()
*/

$file_path = "new_file.txt";
$file_pointer = fopen($file_path, "r");      // Read mode
$file_size = filesize($file_path);      
$content = fread($file_pointer, $file_size); // Read n bytes

echo $content;

// Disconnect to prevent unsaved changes and data corruption
fclose($file_pointer);
?>