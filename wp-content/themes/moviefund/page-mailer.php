
<?php

// $to = "franz@asteriainteractive.com,movieinvestors@gmail.com";
if ($_POST) {

    $to = "franz@asteriainteractive.com";
    $subject = "Message from Moviefund.com";
    $message = "Name: " . $_POST['name'] . "\r\n";
    $message.= "Email: " . $_POST['email'] . "\r\n";
    $message.= "Subject: " . $_POST['subject'] . "\r\n";
    $message.= "Message: " . $_POST['message'] . "\r\n";
    $additional_headers = 'From: info@moviefund.com' . "\r\n" .
        'Reply-To: info@moviefund.com' . "\r\n" . 
        'X-Mailer: PHP/' . phpversion();

    $additional_parameters = "-info@moviefund.com";
} 

// $sent = mail( $to, $subject, $message, $additional_headers, $additional_parameters);
$sent = mail( $to, $subject, $message, $additional_headers, $additional_parameters );

if($_GET) {
    $nonce_verified = wp_verify_nonce($_GET['nonce'],);

    if ($nonce_verified) {
        if ($sent==true) {
            echo "Sent!";
        }
    } else {
        echo "Not sent!";
    }
} else {
    echo "";
    // Silcence is golden.
}

