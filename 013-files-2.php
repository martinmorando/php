<?php
/*
    Files 2
    - Alternative to file_get_contents()
*/

$file_path = "new_file.txt";

// Check if the file exists to prevent errors
if (file_exists($file_path) === true) {

    // Create the file pointer, in read mode
    $file_pointer = fopen($file_path, "r");
    
    // Get the file size (required for fread())
    $file_size = filesize($file_path);

    // Read the entire contents of the file
    $content = fread($file_pointer, $file_size);

    // Output the content of the file
    echo $content;

    // Disconnect to prevent unsaved changes and data corruption
    fclose($file_pointer);
} else {
    echo "Error: file $file_path does not exist";
}
?>