<?php
/*
    Connect to a PostgreSQL DB and execute a select statement

    - Use prepared statements to reduce the risk of (successful) SQL injection attacks
    - Use of colons (:) in array keys is optional. Read more: https://www.php.net/manual/en/pdo.prepare.php
*/

$dbname = "";
$hostname = "";
$username = "";
$password = "";


// Create the Data Source Name (DSN)
// Is the information required to connect to the database
$dsn = "pgsql:host=$hostname;dbname=$dbname";

try {

    // PHP Data Object
    $db = new PDO($dsn, $username, $password);

    // Filter the input before using it in the SQL query to reduce risks
    $id = 1;

    // Prepare query with placeholder ":id"
    $userQuery = $db->prepare('SELECT * FROM users WHERE id = :id');

    // Map placeholder to variable
    $userQuery->execute(['id' => $id]);

    // Fetch user data
    $user = $userQuery->fetch(PDO::FETCH_ASSOC);

    // Display it
    print_r($user);

} catch (Exception $e) {

    // Catch error/s
    echo $e->getMessage();
    exit();

}
?>