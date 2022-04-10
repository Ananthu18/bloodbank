<body bgcolor="cyan">
</body>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
include ("qconn.php");
$sql="SELECT * FROM `transfer_table`";
$result=$connect->query($sql);
$bb = $_POST['s1'];
$bg = $_POST['s2'];
$qty = $_POST['qty'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings                     // Enable verbose debug output
	while($row = $result->fetch_assoc())
	{
	if($row['Blood_bank'] == $bb)
	{
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bloodbank2226sa@gmail.com';                     // SMTP username
    $mail->Password   = '#bloodbank2226';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($row['Email'], 'BloodBank');
    $mail->addAddress($row['Email']);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Request For Blood';
    $mail->Body    = 'We request you for '.$qty.' mL of '.$bg.' blood as early as possible !';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<center><h1>Message has been sent</h1></center>';
	}
	}
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>