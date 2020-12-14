<?php
if($_POST["submit"]) {
    $me = "arturcintra.8@gmail.com";
    $subject = "Form to e-mail message";
    $client = $_POST["name"];
    $clientEmail = $_POST["email"];
    $clientPhone = $POST["phone"];
    $content = $_POST["msg"];

    $email = "Hey there, my name is $client; $content\n\nE-mail: $clientEmail\nPhone number: $clientPhone";

    mail($me, $subject, $email, "From: $client <$clientEmail>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Proza+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="basic.css">
    <title>Form Submitted</title>
</head>
<body>
    <h1>Your message has been sent!</h1>
    <h2>Thank you for your time, we'll answer your message as soon as possible.</h2>
    <a href="./index.html">GO BACK</a>
</body>
</html>