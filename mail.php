<?php

$firstname;
$lastname;
$streetAddress;
$barangay;
$city;
$province;
$phoneNumber;
$email;
$message;


if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_POST['street_address'])) {
    $streetAddress = $_POST['street_address'];
}
if (isset($_POST['barangay'])) {
    $barangay = $_POST['barangay'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}
if (isset($_POST['province'])) {
    $province = $_POST['province'];
}
if (isset($_POST['phone_number'])) {
    $phoneNumber = $_POST['phone_number'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $message = $_POST['message'];
}


$to = "johnpaulnarvasa6@gmail.com, analyn.pagador.ampo@gmail.com, dandrev.oclarit.barrio@gmail.com, roldhan.alcantara.fulo@gmail.com, adsvanced.media.tech@gmail.com, goodmiravite@gmail.com";
$subject = "Rosmar Skin Essentials - Website Inquiry";

$email_body = "<strong>First Name:</strong> $firstname <br>";
$email_body .= "<strong>Last Name:</strong> $lastname <br>";
$email_body .= "<strong>Street Address:</strong> $streetAddress <br>";
$email_body .= "<strong>Barangay:</strong> $barangay <br>";
$email_body .= "<strong>City:</strong> $city <br>";
$email_body .= "<strong>Province:</strong> $province <br>";
$email_body .= "<strong>Phone Number:</strong> $phoneNumber <br>";
$email_body .= "<strong>E-mail:</strong> $email <br>";
$email_body .= "<strong>Message:</strong> $message <br>";

$headers = "From: noreply@RosmarOnline.com\r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.    
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

echo 'Your message has been sent. Thank you!';
mail($to, $subject, $email_body, $headers);
