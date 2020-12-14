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

    $submitted = "<h2>Thank you for your time, we'll answer your message as soon as possible.</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Proza+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Contact Form</title>
</head>
<body>
    <?=$submitted ?>
    
    <form class="contact" action="index.php" method="post">
        <label for="name">Name:</label>
        <br />
        <input type="text" name="name" id="name"required>
        <br />

        <label for="email">E-mail:</label>
        <br />
        <input type="email" name="email" id="email" required>
        <br />

        <label for="phone">Phone number:</label>
        <br />
        <input type="tel" name="phone" id="phone">
        <br />

        <label for="msg">Message:</label>
        <br />
        <input type="msg" name="msg" id="msg" required>
        <br />

        <input type="submit" value="Send e-mail">
    </form>
    
</body>
</html>