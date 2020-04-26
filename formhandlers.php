<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

$secretKey = '6LelFq0UAAAAAENQN1roZurOYYvHM1zpictMzhbE';
        $captcha = $_POST['g-recaptcha-response'];
if(!$captcha){?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please Click ReCaptcha');
        window.location = 'contact.html';
    </script>
       <?php }
else{

$formcontent="From: $name \n Email: $email \n Subject: $subject \n Message: $message \n";
$recipient = "jumpstartpersonaltraining@gmail.com";
    $mailheader = "From: contact@jumpstartpersonaltraining.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
?>