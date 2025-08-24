<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['user_email']);
    $phone = htmlspecialchars($_POST['user_phone']);
    $subject = htmlspecialchars($_POST['user_subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "prajapatikrupesh796@gmail.com"; 
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-type: text/html; charset=UTF-8\r\n";
    $body = "<h2>New Contact Form Submission</h2>"
          . "<p><strong>Name:</strong> $name</p>"
          . "<p><strong>Email:</strong> $email</p>"
          . "<p><strong>Phone:</strong> $phone</p>"
          . "<p><strong>Subject:</strong> $subject</p>"
          . "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
