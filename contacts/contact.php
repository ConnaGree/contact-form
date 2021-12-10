<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $myEmail = "zerubabelyon@gmail.com";

    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . ". \n\n" . $message;


    mail($myEmail, $subject, $message, $header);
    header("Location: index.php?message sent successfully");
}
