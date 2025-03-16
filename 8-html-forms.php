<?php
/*
    HTML forms
    - sanitize and validate (Read more: "Is FILTER_SANITIZE_EMAIL pointless if already using FILTER_VALIDATE_EMAIL?" https://stackoverflow.com/a/16529588)
    - sanitization in front-end is to improve user experience, sanitization in back-end is to not get pwned and save with consistent formatting
    - use htmlspecialchars() if you want to display what user inputed to prevent XSS attacks
*/

$error_message = "";
$success = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get email value from form and create a "sanitized version"
    $original_email = $_POST["email"];
    $sanitized_email = filter_var($original_email, FILTER_SANITIZE_EMAIL);

    // Check the original email is actually the same as the sanitized version and validate it
    if ($original_email === $sanitized_email && filter_var($original_email, FILTER_VALIDATE_EMAIL)) {
        $success = 1;
    } else {
        $error_message = "Invalid email.";
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
                <div class="error"><?= $error_message ?></div>
            </div>
            <div>
                <button type="submit">Send</button>
            </div>
            
            <?php if ($success === 1): ?>
                <div>Form sent!</div>
            <?php endif; ?>
        </form>
    </body>
</html>