<?php  

// Llamando a los campos
$name = $_POST['name'];
$telefono = $_POST['phone'];
$correo = $_POST['email'];
$company = $_POST['company'];
$mensaje = $_POST['message'];

// Datos para el correo
$destinatario = 'comercial@mtsolutions.io, avilchez@mtsolutions.io, fsuazo@mtsolutions.io';
$title = "Contacto desde nuestra web";
$carta = "Mensaje enviado desde la MT Solutions\n";
$carta .= "Nombre: $name \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Empresa: $company \n";
$carta .= "Mensaje: $mensaje";


// Enviando Mensaje
mail($destinatario, $title, $carta);
header('Location:"URL SITIO WEB INGLES"#sendmail');
exit();

?>