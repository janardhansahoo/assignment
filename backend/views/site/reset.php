<!-- reset passwordpage1 -->
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use yii\helpers\Html;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST["email"])){

    $email = $_POST["email"] ;

    $code = uniqid(true) ;

    $query = Yii::$app->db->createCommand()->insert('reset',['code'=>"$code" , 'email'=>"$email",])->execute();
    if(!$query){
        exit("Error, Values are not generated");
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'travelportal82@gmail.com';                     // SMTP username
        $mail->Password   = '123@Welcome';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('travelportal82@gmail.com', 'Portal Password Reset');
        $mail->addAddress($email);     // Add a recipient
        $mail->addReplyTo('no-reply@example.com', 'Information');

        // Content
     	$url="http://". $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/site/password?code=$code" ;
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reset Password';
        $mail->Body    = "<h2>You Requested a Password Reset</h2>
                            Click <a href='$url'>this link</a> to do so";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo ' <div style="font-size:1.25em;font-family:Aclonica;color:#0e3c68;font-weight:bold;"> Reset Password link has been sent.';
    } catch (Exception $e) {
        echo " <div style='font-size:1.25em;font-family:Aclonica;color:#0e3c68;font-weight:bold;'> Reset Password link could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit();
}

// Instantiation and passing `true` enables exceptions
?>


<main id="main">
    <section id="services">
        <div class="limiter">
            <div class="container">
                <div class="section-header">
                    <div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                        <h2><center>RESET PASSWORD</center></h2>

                        <div class="form-group has-success">
                             <form method="POST">
                                <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                <input type="text" class="form-control is-valid" name="email" placeholder="Enter Email" autocomplete="off">
                                <br>
                                <input type="submit" name="submit" class="btn btn-danger" value="Reset Email" >
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
