<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
// echo $_SESSION["logged_in"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONs</title>
</head>
<body>
    
    <?php var_dump($_SESSION); ?>
</body>
</html>