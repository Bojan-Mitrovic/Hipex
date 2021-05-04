<?php
// data sent in header are in JSON format
header('Content-Type: application/json');
// takes the value from variables and Post the data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$postmessage = $_POST['message'];
$to = "example@email.com";
$subject = "Kontakt sa sajta";
// Email Template
$message = "<b>Ime i prezime : </b>" . $name . "<br>";
$message .= "<b>Kontakt : </b>" . $phone . "<br>";
$message .= "<b>Email : </b>" . $email . "<br>";
$message .= "<b>Poruka : </b>" . $postmessage . "<br>";

$header = "From:" . $email . " \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/php\r\n";
$response = mail($to, $subject, $message, $header);
// message Notification
if ($response == true) {
   echo json_encode(array(
      'success' => true,
      'message' => 'Email uspešno poslat. Uskoro cemo vas kontaktirati.'
   ));
} else {
   echo json_encode(array(
      'error' => true,
      'errorMessage' => 'Greška prilikom slanja emaila.'
   ));
}
