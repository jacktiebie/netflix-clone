<?php
session_start();

include("connection.php");
include("functions.php");

$users = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reeceflix</title>
</head>
<body>
    <h1>Reeceflix</h1>
    <a href="logout.php">Logout</a>
</body>
</html>