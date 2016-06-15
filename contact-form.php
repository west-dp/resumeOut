<?php
//$mailheaders .= "From: " . $_POST["userName"] . " <" . $_POST["userEmail"] . ">\r\n";

date_default_timezone_set('Europe/Kiev');

require 'lib/class.phpmailer.php';
require 'lib/class.smtp.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(false);
$mail->Username = "info@outsoft.com"; //логин почты вбить сюда
$mail->Password = "out2016soft"; //сюда пароль от почты
$mail->SetFrom($_POST["userEmail"], $_POST["userEmail"]);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["content"].' '. $_SERVER['REMOTE_ADDR'];
//$mail->AddAddress("info@outsoft.com");
$mail->AddAddress("ared8840@gmail.com");
$mail->AddAddress("andrey.boiko@outsoft.com");
//$mail->AddAddress("anastasia@outsoft.com");
//$mail->AddAddress("taras@outsoft.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

$message = 'Hi '. $_POST["userName"] .',
<br>
<br> We\'ve received your request and will be getting back to you soon. In the meantime, why don\'t you get to know Outsoft a little bit more? Find out our company\'s <a href="http://outsoft.com/company/about-us/?utm_source=Email&utm_medium=AutoReply">story</a>, look at our project <a href="http://outsoft.com/portfolio/?utm_source=Email&utm_medium=AutoReply">samples</a> and read amazing articles on our <a href="http://outsoft.com/blog/?utm_source=Email&utm_medium=AutoReply">blog</a>.
<br>Also, you are welcome to follow us on <a href="https://twitter.com/OutsoftCorp">Twitter</a>, <a href="https://www.facebook.com/outsoftcorp/">Facebook</a> or <a href="https://www.linkedin.com/company/outsoft-corp/">Linkedin</a>.
<br> I look forward to speaking with you soon!
<br>
<br> Sincerely, Outsoft\'s Team';
$subject = $_POST["titleMail"];
$leademail = $_POST["userEmail"];
$headers2 = "From: info@outsoft.com \r\n";
$headers2 .= "Content-type:  text/html\r\n";
mail($leademail, $subject, $message, $headers2);
 
?>