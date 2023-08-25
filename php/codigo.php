<?php
//Guardado de los datos del formulario

//$_POST -> Método por el que php espera recibir el dato.
//$nombre = (armar la caja)
$nombre = $_POST['nombre']; //Crear una caja con la etiqueta $nombre y guardar el texto que el usuario escribió en el elemento de formulario con el atributo name="nombre"

$email = $_POST['email']; //Crear una caja con la etiqueta $email y guardar el texto que el usuario escribió en el elemento de formulario con el atributo name= "email"
$comentarios = $_POST['comentarios'];
$servicio = $_POST['servicio'];
//$servicio = $_POST['opcionesSelect']
//$animales = $_POST['animales'];
//$pais = $_POST['paises'];

//Armado del mail
$to = 'anahiforesi.educacionit@gmail.com'; //Creando la caja con la etiqueta $to y guardar el texto anahiforesi.educacionit@gmail.com
$email_subject = "Nuevo mensaje: de la web";
$email_body = "Haz recibido un nuevo mensaje
                \n Nombre: $nombre
                \n Correo: $email
                \n Consulta por el siguiente mensaje: $servicio
                \n Mensaje o consulta: \n $comentarios \n";
$headers = "From: $email"; 

//Envió de mail

//$to (Usar lo que contiene la caja)
mail($to, $email_subject, $email_body, $headers);

/*
    Función === Acción
    mail() === Función === Acción === Mandar un mail
        => mail del remitente (¿Quién manda el mail?)
            -> $headers
        => mail del destinatario (¿Quién recibe el mail?)
            -> $to
        => asunto (¿De qué va el mail?)
            -> $email_subject
        => texto (el mail)
            -> $email_body

*/
// ar.000webhost.com (servidor gratuito que recomienda la profe)

//Texto que aparece cuando se manda el mail.
echo 'Pronto nos estaremos comunicando con ustes';

?>
<br>
<br>
<button><a href="../index.html"></a></button>