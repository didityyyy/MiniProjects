<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Tasks/Task1/db.php";


$email = $_POST['emailVal'];
$subject = $_POST['subjectVal'];
$firstname = $_POST['firstnameVal'];
$lastname = $_POST['lastnameVal'];
$message = $_POST['messageVal'];

//Send Email
$email_from = 'dayana99dimitrova@gmail.com';
// $email_from = 'web@goliveuk.com';

$to = 'dayana99dimitrova@gmail.com';

$message .= "\r\n Message sent from: $email, $firstname $lastname";

mail($to, $subject, $message);

//Save data to database

if(empty($lastname)){
    $lastname = 'null';
}

$insert = "INSERT INTO messages (email,subject,firstname,lastname,message) 
            VALUES ('$email', '$subject', '$firstname','$lastname','$message')";
$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
if ($query == 1) {
    echo 'Message is sent successfully!';
}
