<?php

if($_POST["submit"]) {
    $recipient="jesykaness@gmail.com";
    $subject="Please contact for Consultation";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["subject"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="name">

        <label>Email address:</label>
        <input name="email">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>
