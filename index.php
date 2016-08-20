<?php
   setcookie("mario", "sandra", time() + (1));
   session_start();
   $_SESSION['fecha'] = "1";
   header('Location: Ventanita/productos.php');
?>