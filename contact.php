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

    header(‘Location: index.html’);
}
?>