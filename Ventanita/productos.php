<?php
    /* Empezamos la sesión */
    session_start();
    if (!isset($_SESSION["fecha"])){
        header('Location: ../index.php');
    };


    $db_server = "127.0.0.1";
    $db_user = "root";
    $db_password = "";
    $db_name = "ventanita";

    //$db_server = "127.0.0.1";
    //$db_user = "bauldeco_mariosa";
    //$db_password = "vo=@}#iCUa36";
    //$db_name = "bauldeco_mariosanchez";

    // vamos a tener que crear aqui el <body>

    mysql_connect($db_server,$db_user,$db_password);
    mysql_select_db($db_name);
  
    $sql="SELECT * FROM productos";
  
    $result=mysql_query($sql);
  
    if($result!=NULL){
        if(mysql_num_rows($result)>0){
            $c=1;
            // la ventana de la beinvenida
                $tabla = "";
            if(isset($_COOKIE['mario'])) {
                $tabla = $tabla . '<body id="v01"><div id="dp17" style="position: absolute; width:100%; height:100%; border:1px solid #808080; padding:5px; background:#088A08;"></div>';
                $tabla = $tabla . '<div id="dp07" style="position: absolute; top:50%; left:50%; width:400px; margin-left:-200px; height:230px; margin-top:-115px; border:1px solid #808080; padding:5px; background:#088A08;">';
                $tabla = $tabla . '<div id="dp01"><span>Bienvenido</span></div>';
                $tabla = $tabla . '<div style="background:#04B431"><div id="dp02"  width="100%">El contenido de este sitio es exclusivo para mayores de edad.</div>';
                $tabla = $tabla . '<div id="dp03" style="text-align:centrer">¿Cual es tu fecha de nacimiento?</div>';
                $tabla = $tabla . '<div><input type="text" id="dp04"/></div></div>';
                $tabla = $tabla . '<div id="dp05"><span><button type="button" id="dp06">Entrar</button></span></div>';            
                $tabla = $tabla . '</div>';
            }
            

            // El correo electronico
            $tabla = $tabla . '<div id="dp14" style="position: absolute; bottom:0; left:0px; width:400px; height:290px; border:1px solid #808080; padding:5px; background:#088A08;">';
            $tabla = $tabla . '<div id="p150">X</div><div id="dp19"><iframe src="email.php" height="100%" width="100%" style="border:0px;"></iframe></div>';                        
            $tabla = $tabla . '</div>';

            // el heder
            $tabla = $tabla . '<div class="w3-container" style="background: #088A08; position:fixed; width:100%">';
            $tabla = $tabla . '<span><img src="img/Logo.png"></span>';
            $tabla = $tabla . '<span id="dp10">Ventanita</span>';
            $tabla = $tabla . '<span style="float:right" id="dp08">Visitanos</span>';                    
            $tabla = $tabla . '</div>';

            while($row=mysql_fetch_array($result)){
                //columna 1
                if ($c==1){
                    $c=$c+1;
        	        $tabla = $tabla .  '<div class="w3-row-padding" style="padding-top:120px;">';
                    $tabla = $tabla . '    <div class="w3-half">';
                    $tabla = $tabla . '        <div width="100%" class="p" id="p' . $row['idProductos'] . '"><img src=' . $row['RutaImagen'] .' width="80%" heigth="80%" margin="auto"></img></div>';
                    $tabla = $tabla . '        <div width="100%" class="dp11">' . $row['Descripcion'] . '</div>';                    
                    $tabla = $tabla . '    </div>';
                }else{
                	$c=1;
                    $tabla = $tabla . '    <div class="w3-half">';
                    $tabla = $tabla . '        <div width="100%" class="p" id="p' . $row['idProductos'] . '"><img src=' . $row['RutaImagen'] .' width="80%" heigth="80%" margin="auto"></img></div>';
                    $tabla = $tabla . '        <div width="100%" class="dp11">' . $row['Descripcion'] . '</div>';           
                    $tabla = $tabla . '    </div>';
                    $tabla = $tabla . '</div>';
                }
            }

            $tabla = $tabla . '<div class="w3-container" style="background: #088A08;">';
            $tabla = $tabla . '<span id="dp09">¿Quienes somos? </span>';
            $tabla = $tabla . '<span id="dp12"> Contactanos</span></div>';            
            $tabla = $tabla . '</div>';            
    }
    mysql_free_result($result);
 }
 
 mysql_close();


 ?>

<html>
<head>
	<meta charset="utf8">
	<head>
        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/Bienvenida.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/IngresoVentania.js"></script>
        <script type="text/javascript" src="js/Tiendas.js"></script>
        <script type="text/javascript" src="js/Quienes.js"></script>
        <script type="text/javascript" src="js/Detalle.js"></script>
        <script type="text/javascript" src="js/Emails.js"></script>        
    </head>

		
	<title></title>
</head>
<body>
<?php echo $tabla ?>
</body>
</html>