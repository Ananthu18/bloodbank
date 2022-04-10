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
$sql="SELECT * FROM `user_table`";
$result=$connect->query($sql);
$date=$_POST['date'];
$time=$_POST['time'];
$city=$_POST['city'];
$address=$_POST['address'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings                     // Enable verbose debug output
	while($row = $result->fetch_assoc())
	{
	$email = $row['Email'];
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bloodbank2226sa@gmail.com';                     // SMTP username
    $mail->Password   = '#bloodbank2226';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, 'BloodBank');
    $mail->addAddress($email);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Blood Donation Camp';
    $mail->Body    = 'We have organised a blood donation camp on '.$date.' at '.$address.' in '.$city.' at '.$time.' We request your kind participation !';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
	}
	include('insert_donation_camp.php');
	}
	catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>