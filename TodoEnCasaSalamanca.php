<?php
  // Configuración del correo electrónico
  $to = "info@todoencasasalamanca.es";
  $subject = "Formulario de contacto";

  // Recopilar los datos del formulario
  $nombre = $_GET["Nombre"];
  $telefono = $_GET["Telefono"];
  $correo = $_GET["correo"];
  $mensaje = $_GET["Mensaje"];

  // Crear el cuerpo del correo electrónico
  $body = "Nombre: $nombre\n";
  $body .= "Teléfono: $telefono\n";
  $body .= "correo: $correo\n";
  $body .= "Mensaje: $mensaje\n";
  

  // Enviar el correo electrónico
  if (mail($to, $subject, $body)) {
    // Redirección a la página de agradecimiento
    header("Location:TodoEnCasaSalamanca2.html");
    exit;
  } else {
    echo "Error al enviar el formulario";
  }
?>