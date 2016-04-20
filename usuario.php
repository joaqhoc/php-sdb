<html>
   <head>
      <title>Usuario | PHP - SDB</title>
   </head>
   <body align="center">
<?php

   /* Variable usu = user - variable con = password */
   $usu = $_GET['user'];
   $con = $_GET['password'];
   
   /* Usuario 1*/
   $usu1 = "us3r";
   $con1 = "p4ss";
   /* Usuario 2*/
   $usu2 = "sk4ry";
   $con2 = "s3c";
   /* Usuario 3*/
   $usu3 = "phpsdb";
   $con3 = "sdb";
   	
	/* Variable Si la contraseña o usuario son incorrectos */
   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   	/* El usuario 1 es correcto */
   switch ($usu) {
      case $usu1:
         if ($con == $con1) {
            echo "Bienvenido " . $usu;
			echo "<br>Ir al "  . '<a href="index.php">Inicio</a>';
         } else {
            echo $error_notif; /* El usuario 1 es incorrecto */
         }
      break;
	  
	/* El usuario 2 es correcto */
      case $usu2:
         if ($con == $con2) {
            echo "Bienvenido " . $usu; 
         } else {
            echo $error_notif; /* El usuario 2 es incorrecto */
         }
      break;
	/* El usuario 3 es correcto */
      case $usu3:
         if ($con == $con3) {
            echo "Bienvenido " . $usu;
         } else {
            echo $error_notif; /* El usuario 3 es incorrecto */
         }
      break;
      default:
         echo $error_notif;
   }
?>
   </body>
</html>
