<?php
//var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"];



$EmailTo = "contact@researchcollective.io";
//$EmailTo = "b3nrules@me.com";
$Title = "New Research Collective Message";

$Fields = '';
// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From: contact@researchcollective.io");
if (!$success) {
    $errorMessage = error_get_last()['message'];
    echo $errorMessage;
} else {
    echo 'We have successfully received message, thank you!';
}

