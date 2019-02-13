<?php
if( isset($_POST['submit']) ){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $header = "Trucksosa" . "\r\nContent-type: text/html\r\n";
    $header = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //cuerpo del mensaje//
    $mensaje = "---------------------\n";
    $mensaje .= "            Contacto Asistencia             \n";
    $mensaje .= "---------------------------------- <br> \n";
    $mensaje .= "NOMBRE:  " . $name . "<br> \n";
    $mensaje .= "EMAIL:  " . $email . "<br> \n";
    $mensaje .= "<br> \n COMENTARIO:  " . $message . "<br> \n";
    $mensaje .= "FECHA:    " . date("d/m/Y") . "<br> \n";
    $mensaje .= "HORA:     " . date("h:i:s a") . " <br>\n";

    $mensaje .= "---------------------------------- \n";
    $mensaje .= "Enviado desde -----------------------------<br>Boda Contacto";

    $para = "gomitaana09@gmail.com";
    // Enviamos el mensaje
    $asunto ="Contacto desde la pagina web de Edgar y Ana";
    //regresar el codigo

    mail($para,$asunto, utf8_decode($mensaje), $header);

    echo '<script language = javascript>
             alert("Su mensaje se ha enviado correctamente")
             self.location = "http://edgaryana.com/"
             </script>';
    exit();
}
  ?>