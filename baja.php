<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   
    require 'session.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Baja</title>
    </head>
    <body>
        <?php
        
            /* Cargando codificación */

   
            $link->query("SET NAMES 'utf8'");
            
            /* Cargando ficheros necesarios */
            
            require 'config.php';
            require 'ProcVal.php';
            
            /* Conexión con la base de datos */
            
            $link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD); /* Creación de la conexión haciendo uso de las variables locales del fichero config.php*/
            mysqli_select_db($link, $DB_NAME); /* Abre la base de datos "libreria" */
            
            /* Definición de variables. Guarda datos introducidos en el formulario en variables. */
            
       
            $passwd = $_REQUEST['pass1'];
         

/*     BORRAR            
            if($login==TRUE){
                echo ' El campo nombre ha sido completado. <font color="blue"><strong>'.$nombre."</strong></font>";
            }
            if($passwd1==TRUE){
                echo ' <br/>El campo apellidos ha sido completado. <font color="blue"><strong>'.$apellidos."</strong></font>";
            }
 */     
            $insertar = mysqli_query($link, "INSERT INTO usuariosBaja SELECT * FROM `usuarios` WHERE idUsuario='".$_SESSION['userId']."'");
        ?>
 

    <h1>Formulario de baja Libreria<br></h1>
    <!--
    <div>
        <form action="" method="post">
            <table border="0">
                 <caption>User logon</caption>
                 <tr><td>Introduzca el usuario<input type="text" name="login" size=18 maxlength="18" /></td></tr>
                 <tr><td><input type="text" name="pass1" size=10 maxlength="10" /></td></tr> 
            </table>
        </form>
    </div>-->
    
    

 
 
    </body>
</html>
