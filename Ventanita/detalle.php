<?php 
    session_start();
    if (!isset($_SESSION["fecha"])){
        header('Location: ../index.php');
    };

    $e = str_replace("p","",$_GET["e"]);

        $db_server = "127.0.0.1";
	$db_user = "root";
	$db_password = "";
	$db_name = "ventanita";

    //$db_server = "127.0.0.1";
    //$db_user = "bauldeco_mariosa";
    //$db_password = "vo=@}#iCUa36";
    //$db_name = "bauldeco_mariosanchez";


    mysql_connect($db_server,$db_user,$db_password);
    mysql_select_db($db_name);
  
    $sql="SELECT productos.idProductos, (productos.descripcion) as producto, (detalle.Descripcion) as detalle, productos.RutaImagen FROM productos JOIN (detalle) ON (productos.idProductos=detalle.idProducto) where productos.idProductos=".$e;
  
    $result=mysql_query($sql);
  
    if($result!=NULL){
        if(mysql_num_rows($result)>0){
            // el heder
            $tabla = "";
            $tabla = $tabla . '<div class="w3-container" style="background: #088A08; position:fixed; width:100%">';
            $tabla = $tabla . '<span><img src="img/Logo.png"></span>';
            $tabla = $tabla . '<span id="dp10">Ventanita</span>';                    
            $tabla = $tabla . '</div>';

            $tabla = $tabla . '<div class="w3-container">';
            $tabla = $tabla . '</div>';

            $c = 1;
            while($row=mysql_fetch_array($result)){
                //columna 1
                if ($c==1){
                    $c=$c+1;
        	        $tabla = $tabla .  '<div class="w3-row-padding" style="padding-top:120px;">';
                    $tabla = $tabla . '    <div class="w3-half">';
                    $tabla = $tabla . '        <div><img src=' . $row['RutaImagen'] .' width="80%" heigth="80%"></img></div>';
                    $tabla = $tabla . '    </div>';
                    $tabla = $tabla . '    <div class="w3-half">';   
                    $tabla = $tabla . '        <div id="p40">' . $row['producto'] .'</div>';                                      

                }else{
                    $tabla = $tabla . '        <div id="p41">' . $row['detalle'] .'</div>';
                }
            }

            $tabla = $tabla . '        <div id="p42"><button type="button" id="p51">Regresar</button></div>';

            $tabla = $tabla . '    </div>';
            $tabla = $tabla . '</div>';

            $tabla = $tabla . '<div style="position: absolute; bottom:0; left:0px; width:100%; background:#088A08;">.</div>';            
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
        <style>
            .Et {display:inline-block;}
        </style>
    </head>
	<script type="text/javascript">

	</script>		
	<title></title>
</head>
<body>
<?php echo $tabla ?>
</body>
</html>