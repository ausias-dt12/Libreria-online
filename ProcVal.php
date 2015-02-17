<?php
if(isset($_REQUEST['password1'])){
                $password1 = $_REQUEST['password1'];
 
         if( !preg_match($password1) ){
            exit('Error: la contraseña debe tener entre 6 y 25 caracteres, incluyendo al menos una letra mayúscula, una minúscula, un número y un caracter especial');
        }
        }
        
  //Consultas a la base de datos
 
else {
  exit('Error: no se han recibido todas las variables necesarias');
}

