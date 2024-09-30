<?php
$uname=$_POST['name'];
$uemail=$_POST['mailid'];
$usub=$_POST['subject'];
$umsg=$_POST['message'];
$email_from="mohinimohod02@gmail.com";
$email_subject="New Form Submission";
$email_body="User Name: $uname.\n".
"User Email:$uemail.\n".
"subject:$usub.\n".
"User Message:$umsg.\n";
$to="tpodcpe@hvpm.org";
$header="From: $email_from\r\n";
$header.="Replay-To: $email\r\n";
mail($to, $email_subject, $email_body, $header); header("location:cont.html"); ?>