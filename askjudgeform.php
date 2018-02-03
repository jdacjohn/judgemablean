<?php
$to = $_REQUEST['sendto'] ;
$from = $_REQUEST['email'] ;
$Name = $_REQUEST['name'] ;
$headers = "From: $from";
$subject = "Ask Judge Mablean Question Form";

$fields = array();
$fields{"name"} = "name";
$fields{"email"} = "email";
$fields{"question"} = "question";





$body = "Someone has posed a question from the Judge Mablean website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: noreply@judgemablean.com";
$subject2 = "Ask Judge Mablean A Question";
$autoreply = "Thank you for submitting a question to Judge Mablean. As soon as we receive your question fee via PayPal,
your question will be presented in front of the Judge and answered in the order received.
If you have any questions please email judgemablean@aol.com. Have a great day!";

if($from == '') {print "You have not entered an email, please go back and try again";}
else {
if($Name == '') {print "You have not entered a name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.judgemablean.com/askjudge_thankyou.php" );}
else
{print "We encountered an error sending your mail, please notify steph@goddessdesignonline.com"; }
}
}
?>
