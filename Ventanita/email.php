<?php
    //session_start();
    //if (!isset($_SESSION["fecha"])){
    //    header('Location: ../index.php');
    //};


if(isset($_REQUEST['email'])){
	$email_from = $_REQUEST['email'];
	$asunto = $_REQUEST['asunto'];
        $mensaje = $_REQUEST['mensaje'];

    $email_from = $_REQUEST['email'];
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_from, $asunto, $mensaje, $headers);
    echo "Mensaje Enviado";
} else {
    $tabla = '<htm><body><form action="email.php" method="POST">';
    $tabla = $tabla . '<div id="dp01"><span>Contactanos</span></div>';
    $tabla = $tabla . '<div style="background:#04B431">';
    $tabla = $tabla . '<div><span>De: </span><input type="text" width="100%" name="email"/></div>';
    $tabla = $tabla . '<div><span>Asunto: </span><input type="text" width="100%" name="asunto"/></div>';
    $tabla = $tabla . '<div><textarea rows="4" cols="40" width="100%" name="mensaje"></textarea></div>';
    $tabla = $tabla . '</div>';
    $tabla = $tabla . '<div id="dp05"><span><input type="submit" id="dp78"/></span></div>';
    $tabla = $tabla . '</form><body>';
        
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/Bienvenida.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/IngresoVentania.js"></script>
        <script type="text/javascript" src="js/Tiendas.js"></script>
        <script type="text/javascript" src="js/Quienes.js"></script>
        <script type="text/javascript" src="js/Detalle.js"></script>        
    </head>
<body>
<?php echo $tabla; ?>
</body>
</html>