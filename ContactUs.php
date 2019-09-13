<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "youssef.bouhanef@mycdi.ca";
    $headers = "From: ".$mailfrom;
    $msg = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $msg, $headers);
    header("Location: index.php?mailsend");
  }
 ?>
