<?php
use PHPMailer\PHPMailer\PHPMailer;
//include 'files/connect.php';

function sendSMTP($name, $type, $email, $message){


    include 'vendor/autoload.php';
    include '../vendor/autoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    //$mail->Username = "feroze.menon@ashoka.edu.in";
    $mail->Username = "ug.connect@ashoka.edu.in";

    //Password to use for SMTP authentication
    //$mail->Password = "Katherine@0214";
    $mail->Password = "admissions@0214";

    //Set who the message is to be sent from
    $mail->setFrom('ug.connect@ashoka.edu.in', 'Webmaster - Alpha7Seas');

    //Set an alternative reply-to address
    //$mail->addReplyTo('shekhar.chatterjee_ug20@ashoka.edu.in', 'Shekhar Chatterjee');

    //Set who the message is to be sent to
    if($type==1){
        $email2 = "ask@alpha7seas.com";
    }
    if($type==2){
        $email2 = "vedharth@alpha7seas.com, ashish@alpha7seas.com";
    }
    $email2 = "iamshekharchatterjee@gmail.com";
    $mail->addAddress($email2);

    //Set the subject line

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$email_message = 
    
   //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Form Submission';
    $mail->Body    = '<b>Name:</b> '.$name.'<br><b>Email:</b> '.$email.'<br><b>Message:</b> '.$message.'<br>';

    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        //echo "Message sent!";
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/RegLinks";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>