<?php
// The top 37 lines are the section to add user responses to the database.
// Only name (c_name) and email (c_email) are required fields.
// PHP Mailer starts below that. It uses anchortagdesign@gmail.com as the email connection.
if (isset($_POST['c_name'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_phone = $_POST['c_phone'];
    $comments = $_POST['comments'];

    // Connection to the database.
    include '../includes/db.inc.php';

    try
    {
        $sql = 'INSERT INTO contact SET
            c_name = :c_name,
            c_email = :c_email,
            c_phone = :c_phone,
            comments = :comments';
        
        // The $_POST['myName'] values need to match the "name" of the form field in the contact.html.php file.
        // Field names need to match those from the database.
        $s = $pdo->prepare($sql);
        $s->bindValue(':c_name', $c_name);
        $s->bindValue(':c_email', $c_email);
        $s->bindValue(':c_phone', $c_phone);
        $s->bindValue(':comments', $comments);

        $s->execute();
    }
    
    catch (PDOException $e) {
        $error = 'There was an error submitting your information.';
        include 'error.html.php';
        exit();
    }

// This is the beginning of the PHP Mailer program. ############################### PHP Mailer
// Additional files are in the PHPMailer folder at the root. ###################### PHP Mailer
   date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
    $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

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
    $mail->Username = "XXXXXXXXXX@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "XXXXXXXXXX";

//Set who the message is to be sent from
    $mail->setFrom('XXXXXXXXXX@gmail.com', 'ATD Forms'); // This said 'Form Catcher' - the only reference on this page.

//Set an alternative reply-to address
    $mail->addReplyTo($c_email, $c_name);

//Set who the message is to be sent to
    $mail->addAddress('XXXXXXXXXX@gmail.com', 'XXXXX XXXXXXXX');

//Set the subject line
    $mail->Subject = 'User generated email from anchortagdesign.com';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//    $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
//    $mail->AltBody = 'This is a plain-text message body';

// Make email HTML
    $mail->isHTML(true);

// Add body message
    $mail->Body .= 'Name: ' . $c_name . '<br>';
    $mail->Body .= 'email: ' . $c_email . '<br>';
    $mail->Body .= 'Phone: ' . $c_phone . '<br>';
    $mail->Body .= 'Comments: ' . $comments . '<br>';

//Attach an image file
    $mail->addAttachment('../PHPMailer/examples/images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        // echo "Message sent!";
        include('success.php');
    }
    // The next curly bracket ends the initial if statement from line 5!
    // The else statement reloads the contact.html.php file if nothing was entered into the 'c_name' field.
} else {
    include 'contact.php';
}
