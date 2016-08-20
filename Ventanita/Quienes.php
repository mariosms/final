<?php 
    session_start();
    if (!isset($_SESSION["fecha"])){
        header('Location: ../index.php');
    };


?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="content-language" content="es">
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="all" title="Screen">
        <link rel="stylesheet" href="css/jquery.rondell.css" type="text/css" media="all" title="Screen">

        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery.rondell.js"></script>

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/Bienvenida.css">
        <script type="text/javascript" src="js/IngresoVentania.js"></script>
        <script type="text/javascript" src="js/Tiendas.js"></script>
        <script type="text/javascript" src="js/Quienes.js"></script>
        <script type="text/javascript" src="js/Detalle.js"></script>
        <script type="text/javascript" src="js/Emails.js"></script>        

        <title>Ventanita</title>
    </head>
    <body style="background:white !important;">
        <div class="w3-container" style="background: #088A08; position:fixed; width:100%; top:0px !important;">'
        <span><img src="img/Logo.png"></span>
        <span id="dp10">Ventanita</span>                    
        </div>

        <div id="rondellCarousel" class="hidden caja" style="top:80px !important;">
            <a id="Img1" target="_blank" rel="rondell_1" href='' title=""><img  id="Img11" width="500px" src="img/gr/img1.jpg" alt="" title=""><h5 id="Img111"></h5><p>El carro del Profesor</p></a>
            <a id="Img2" target="_blank" rel="rondell_1" href='' title=""><img  id="Img21" width="500px" src="img/gr/img2.jpg" alt="" title=""><h5 id="Img211"></h5><p>El carro de Karen</p></a>
            <a id="Img3" target="_blank" rel="rondell_1" href='' title=""><img  id="Img31" width="500px" src="img/gr/img3.jpg" alt="" title=""><h5 id="Img311"></h5><p>El carro del Miguel</p></a>
            <a id="Img4" target="_blank" rel="rondell_1" href='' title=""><img  id="Img41" width="500px" src="img/gr/img4.jpg" alt="" title=""><h5 id="Img411"></h5><p>El carro de Brenda</p></a>
            <a id="Img5" target="_blank" rel="rondell_1" href='' title=""><img  id="Img51" width="500px" src="img/gr/img5.jpg" alt="" title=""><h5 id="Img511"></h5><p></p></a>
            <a id="Img6" target="_blank" rel="rondell_1" href='' title=""><img  id="Img61" width="500px" src="img/gr/img6.jpg" alt="" title=""><h5 id="Img611"></h5><p></p></a>
            <a id="Img7" target="_blank" rel="rondell_1" href='' title=""><img  id="Img71" width="500px" src="img/gr/img7.jpg" alt="" title=""><h5 id="Img711"></h5><p></p></a>
        </div>

        <div id="p42"><button type="button" id="p51">Regresar</button></div>

        <div style="position: absolute; bottom:0; left:0px; width:100%; background:#088A08;">.</div>            


        <script type="text/javascript">
            (function() {
                $(function() {
                    var carousel;
                    carousel = $("#rondellCarousel").rondell({
                    preset: "carousel"
                });
                return $.ajax({
                url: "",
                dataType: "jsonp",
                success: function(data, text, xhqr) {
                    var item, rondellContent, _i, _len, _ref;
                    if (text === "success") {
                        rondellContent = "";
                        _ref = data.slice(0, 25);
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            item = _ref[_i];
                            rondellContent += "            <a href=\"" + item.image + "\" title=\"" + item.title + " @ " + item.url + "\" target=\"_blank\" style=\"display:none\">              <img src=\"" + item.preview + "\" title=\"" + item.title + "\" width=\"" + item.width + "\" height=\"" + item.height + "\"/>            </a>          ";
                        }
                        return $("#rondellCubic").html(rondellContent).rondell({
                        preset: "cubic"
                        });
                    }
                }
            });
         });
         }).call(this);
        </script>
</html>