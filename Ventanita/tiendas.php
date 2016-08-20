<?php
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

    mysql_connect($db_server,$db_user,$db_password);
    mysql_select_db($db_name);
  
    $sql="SELECT * FROM tiendas";
  
    $result=mysql_query($sql);
  
    if($result!=NULL){
        if(mysql_num_rows($result)>0){
            $c=1;
            // el heder

            $tabla = '<div class="w3-container" style="background: #088A08; position:fixed; width:100%">';
            $tabla = $tabla . '<span><img src="img/Logo.png"></span>';
            $tabla = $tabla . '<span id="dp10">Ventanita</span>';                    
            $tabla = $tabla . '</div>';
            $tabla = $tabla .  '<div class="w3-row-padding" style="padding-top:90px; padding-bottom:20px;">';
            $tabla = $tabla . '    <div class="w3-third">';
            $tabla = $tabla . '        <div id="p40">Visitanos en:</div>';

            $y=100;
            while($row=mysql_fetch_array($result)){
                $y = $y + 1;
                $tabla = $tabla . '    <div style="padding-top:10px;" class="p' . $y . '">' . $row['Tienda'] . '</div>';
            }

            $tabla = $tabla . '    <div id="p42"><button type="button" id="p60">Regresar</button></div>';

            $tabla = $tabla . '    </div>';

            $tabla = $tabla . '    <div class="w3-half"><iframe id="p115" src="mapa.php" height="80%" width="80%" frameborder="0"></iframe></div>';
            $tabla = $tabla . '</div>';

            $tabla = $tabla . '<div class="w3-container" style="background: #088A08; width=100%;">';
            $tabla = $tabla . '<span id="#dp09"><span id="#dp109">.</span></span>';
            $tabla = $tabla . '</div>';
    }
    mysql_free_result($result);
 }
 
 mysql_close();
 ?>
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/Bienvenida.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/IngresoVentania.js"></script>
        <script type="text/javascript" src="js/Tiendas.js"></script>
        <script type="text/javascript" src="js/Quienes.js"></script>
        <script type="text/javascript" src="js/Detalle.js"></script>
        <script type="text/javascript" src="js/Mapa.js"></script>
    </head>
    <body>
<?php echo $tabla ?>
</body>
</html>
