
<?php 

    $nombre_form = $_POST ['nombre_y_apellido'];
    $mail_form = $_POST ['mail'];
    $horario_form = $_POST ['horario_de_contacto'];
    $number_form = $_POST ['phone'];
    $consulta_form = $_POST ['consulta'];

?>

<?php

    $cuerpo_mail = "nombre" . $nombre_form . "\r\n" . 
                    "mail"  . $mail_form . "\r\n" .
                    "horario" . $horario_form . "\r\n" .
                    "number" . $number_form . "\r\n" .
                    "consulta" . $consulta_form . "\r\n" ;

    mail("chiattidebora@gmail.com", 'consulta', $cuerpo_mail);
?>