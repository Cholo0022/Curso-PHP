<?php
    $nombre= $_POST["nombre"];
    $apellido=$_POST["apellido"];
    $destinatario=$_POST["mail"];
    $asunto=$_POST["asunto"];
    $comentario=$_POST["comentario"];

    $headers="MIME-Version:1.0\r\n";

    $headers.="Content-type: text/html;charset=utf8\r\n";

    $headers.="From: Andrés Bozzani < andres.bozzani@gmail.com >\r\n";

    $exito=mail($destinatario, $asunto, $comentario, $headers);

    if ($exito){
        echo "Mail enviado exitosamente";
    }else{
        echo "Error de envio de mail";
    }



?>