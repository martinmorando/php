<?php
/*
    HTML Forms
    
    - Sanitize and validate. Read more: "Is FILTER_SANITIZE_EMAIL pointless if already using FILTER_VALIDATE_EMAIL?" https://stackoverflow.com/a/16529588
    
    - Sanitization in front-end is to improve user experience, sanitization in back-end is to not get pwned and save with consistent formatting.    
    
    - Why not sanitize the email, validate it and save it all at once? Because the user could write it wrong, and an incorrect email would be saved!

    - If you want to display what user inputed, use htmlspecialchars() to prevent XSS attacks.
*/

$success = 0;

// Initialize error variables
$error_message = "";
$error_email = "";
$error_quantity = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") { 

    // Get quantity and email values from form, and create a "sanitized version" of the email for later comparison
    $original_quantity = $_POST["quantity"];
    $original_email = $_POST["email"];
    $sanitized_email = filter_var($original_email, FILTER_SANITIZE_EMAIL);

    // Check the original email is actually the same as the sanitized version and validate it
    if (!($original_email === $sanitized_email && filter_var($original_email, FILTER_VALIDATE_EMAIL))) {
        $error_email = "Invalid email.";
    }

    // Validate quantity, an integer between 1 and 10 included
    $quantity_options = ["options" => ["min_range" => 1, "max_range" => 10]];
    if (!filter_var($original_quantity, FILTER_VALIDATE_INT, $quantity_options)) {
        $error_quantity = "Invalid quantity.";
    }

    // Check for errors
    if (empty($error_email) && empty($error_quantity)) {
        // Seems ok, inform user, add logic to save in form, etc
        $success = 1;
    } else {
        // Set the error message for the user
        $error_message = $error_email . " " . $error_quantity;
    }
}
?>
<html>
    <head>
        <title>HTML Form</title>
        <style>
            .error {
                color: red;
            }
        </style>  
    </head>
    <body>
        <form action="8-html-forms.php" method="post">
            <div>
                <!-- Set type="email" and required to give immediate feedback
                and reduce load on the server -->
                <input type="email" name="email" placeholder="Email:" required />
            </div>
            <div>
                <!-- Notice the user of type="number", min and max values -->
                <input type="number" name="quantity" min="1" max="10" required />
            </div>            
            <div>
                <button type="submit">Send</button>
                <div class="error"><?= $error_message ?></div>
            </div>
            <?php if ($success === 1): ?>
                <div>Form sent!</div>
            <?php endif; ?>
        </form>
    </body>
</html>