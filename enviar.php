<?php 

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$destinatario = "javiigonzaga2012@gmail.com";
$asunto = "Envio de correo de prueba con PHP"; 
$cuerpo = '
    <html> 
        <head> 
            <title>Prueba de envio de correo</title> 
        </head>

        <body> 
            <h1>Formulario realizado por '.$nombre.' </h1>
            <p> 
                Contacto: '.$nombre .'  <br>
                Correo: '.$correo.' <br>
                Asunto: '. $asunto.' <br>
                Mensaje: '.$mensaje.' 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
$mail = mail($destinatario,$asunto,$cuerpo,$headers);

if($mail) {
    echo "<script>alert('Correo enviado correctamente')";
} else {
    echo "<script>alert('El correo no se envió')";
}

?> 