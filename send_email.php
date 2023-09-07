<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$eflag = 0;
extract($_POST);
// redirect url 
$redirect = "/contact";
 

?>

  <?php
    if (1) {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //============== only change here==============
            // website name
            $webName = "ecorex";
            //Set the SMTP server to send through
            $host = "mail.rototransindia.com";
            // SMTP password
            $pass = "s2vMn3vF5WisB3p";
            // SMTP username
            $fromMail = 'ecorex@rototransindia.com';
            // from Mail Name 
            $fromMailName = 'Ecorex';
            // recipient Mail $email connect@ecorex.in
            $toEmail = 'vasettisatish@gmail.com';
            // recipient Mail Name
            $toName = $first_name;
            // Subject
            $subject = $subject;
            // Mail Success messege
            $successMsg = "<script>alert('Your Request has been sended to our customer support we will contact you soon !');window.location.href = 'index.php'</script>";
            // mail body
            $body = '
                     <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                         <div style="margin:50px auto;width:70%;padding:20px 0">
                         <div style="display: flex; justify-content:center">
                         <span>
                                 <h2 style="background: #4caf50;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;"> New Enquiry</h2>
                                       
                                     </div>
                             
                                     <p>You Have Recieve New Enquiry From Your Website details are below:</p>
                                 </tbody>
                                     <div style="line-height: 10px;">
                                         <h3 style="color: #00466a; font-weight: bold;">Client Name: <span style="color:#000">' . $first_name . '</span></h3>
                                         <h3 style="color: #00466a; font-weight: bold;">Email: <span style="color:#000">' . $email . '</span></h3>
                                         <h3 style="color: #00466a; font-weight: bold;">Subject: <span style="color:#000">' . $subject . '</span></h3>
                                         <h3 style="color: #00466a; font-weight: bold;">Contact: <span style="color:#000">' . $contact . '</span></h3>
                                         <h3 style="color: #00466a; font-weight: bold;">Message: <span style="color:#000">' . $message . '</span></h3>
                                     </div>
                                     <p style="font-size:0.9em;">Regards,<br> ' . $webName . '</p>
                                 </div>
                             </div>';
            //============== only change here END==============
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $host;                                   //Set the SMTP server to send through
            $mail->CharSet = 'utf-8';
            // Attach the uploaded PDF file
            if($_POST["pdf_file"]){
                $pdfFilePath = $_FILES['pdf_file']['tmp_name'];
                $pdfFileName = $_FILES['pdf_file']['name'];
                $mail->addAttachment($pdfFilePath, $pdfFileName);
            }
             
            // $mail->AddEmbeddedImage("logo.png", "my-attach", "logo.png");
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $fromMail;                               //SMTP username
            $mail->Password   = $pass;                                     //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom($fromMail, $webName);
            $mail->addAddress($toEmail, $toName);     //Add a recipient
            // Use This For Attacments.
            // $mail->addAttachment('/tmp/image.jpg', 'file.jpg');    //Optional name
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->send();
            $eflag = 1;
            echo $successMsg;
        } catch (Exception $e) {
            echo "<script>alert('Alert: Message could not be sent. Mailer Error: {$mail->ErrorInfo}');location='" . $redirect . "';</script>";
        }
    }
    ?>
   