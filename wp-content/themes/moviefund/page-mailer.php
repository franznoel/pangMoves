<?php

// if ($_POST) {
//     print_r($_POST);
// } else {
//     echo "";
// }

if ($_POST) {
    $to = "franz@asteriainteractive.com,movieinvestors@gmail.com";
    $subject = "Message from Moviefund.com";
    $message = "Name: " . $_POST['contactName'] . "\r\n" .
        "Email: " . $_POST['contactEmail'] . "\r\n" .
        "Subject: " . $_POST['contactSubject'] . "\r\n" .
        "Message: " . $_POST['contactMessage'] . "\r\n";
    $additional_headers = 'From: info@moviefund.com' . "\r\n" .
        'Reply-To: info@moviefund.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $additional_parameters = "-info@moviefund.com";

    $nonce_verified = wp_verify_nonce($_POST['_wpnonce']);
    if ($nonce_verified) {
        $sent = mail( $to, $subject, $message, $additional_headers, $additional_parameters);
        if ($sent==true)
            echo "Sent!";
        header("Location: /contact-us/?error=1");
    } else {
        echo "Not sent!";
    }
} else {
    echo "";
    header("Location: /contact-us/?error=1");
}

