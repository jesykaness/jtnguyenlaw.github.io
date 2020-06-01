<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "jngyuen@jgnyuenlaw.com";
  $headers = "From: ".$emailFrom;
  $txt = "You have a consultation inquiry from ".$name.".\n\nPhone number:".$phone."\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");
}
 ?>
