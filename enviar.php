<?php
$destino= "yulianatobar24@gmail.com";
$nombre= $_POST["nome"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];
$contenido = "nome: " . $nome. "\nEmail: " . $email . "\nSubject: " $subject . "\nMessage: $message ";
mail($destino, $subject; "contacto", $contenido);
header("location:Gracias.html");

?>
