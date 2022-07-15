<?php
require_once "databaseCon.php";
session_start();
if ($_SESSION['user'] && $_SESSION['id']) {
} else {
    header("Location: index.php?");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-form</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/logout.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>

<body style="flex-direction: column">


    <h1 style="color: #fff; font-size: 2.5rem;" class="welcome">Welcome, <span style="font-size: 2.5rem; text-transform: capitalize; display: inline;"><?php echo $_SESSION['user']; ?><span>
    </h1>
    <a style="display: block; background: #000; border-radius: 4px;" href="logout.php" class="logout">Logout</a>

</body>

</html>