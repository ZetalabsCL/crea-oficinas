<?php

   // Here we get all the information from the fields sent over by the form.
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = 'vhs@creaoficinas.cl';
$subject = 'Nuevo contacto desde la web de CreaOficinas Ltda';
$message = 'DE: '.$name."\n".' Email: '.$email. "\n".'MENSAJE: '.$message;
$headers = 'vhs@creaoficinas.cl' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Tu Email fue enviado correctamente, pronto nos contactaremos contigo!"; // success message
}else{
echo "Email invalido. Proporciona una direccion correcta!";
}
?>
