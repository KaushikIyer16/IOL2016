 <?php

$from_name = $_POST["name"];
$from_mail = $_POST["email"];
$message = $_POST["message"];


require_once 'swiftmailer/lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail.plo-in.org', 25)
  ->setUsername('ploin15')
  ->setPassword('ploMysorein14')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:
// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
// Mail
$transport = Swift_MailTransport::newInstance();
*/
// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
$headers .= "X-Mailer: PHP v".phpversion()."\r\n"; 
// Create a message
$message = Swift_Message::newInstance('IOL14 ALERTS')
  ->setFrom(array( 'iol.india2016@gmail.com' => 'IOL14'))
  ->setTo(array('iol16@plo-in.org'))
  ->setBody("Name : ".$from_name."\n\n"."Email : ".$from_mail."\n\n".'Message : '."\n".$message)
  ;

// Send the message
$result = $mailer->send($message);
 
           if( $result == 1)
           {
            echo "successfully";
           }
           else{
           		  echo "error";
           }
?>