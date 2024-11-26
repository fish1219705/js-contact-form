<?php

// print_r($_POST);

$message = 'You have received a contact form submission:
    
First Name: '.$_POST['first'].'
Last Name: '.$_POST['last'].'
Email: '.$_POST['email'].'
Message: '.$_POST['message'];

$to = 'hanpeiyu7755@gmail.com';
$subject = 'Contact Form Submission';
$headers = 'From: webmaster@infinityfreeapp.com' . "\r\n" .
    'Reply-To: webmaster@infinityfreeapp.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);


$connect = mysqli_connect(
    'sql213.infinityfree.com',
    'if0_37424643',
    'Passw0rd7755',
    'if0_37424643_portfolio');

$query = 'INSERT INTO contact (
            first,
            last,
            email,
            message
        ) VALUES (
        "'.$_POST['first'].'",
        "'.$_POST['last'].'",
        "'.$_POST['email'].'",
        "'.$_POST['message'].'"
        )';

//  echo $query;

mysqli_query($connect, $query);

header('Location: thankyou.html');