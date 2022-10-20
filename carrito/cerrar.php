<?php
    session_start();/*Mantengo la seison iniciada*/

    setcookie('usuarioCookie',$_SESSION['usuario'], time()-2500);//Boroo la cookie poniendo el negativo del tiempo en que la inicialice
    

    session_destroy();/*cierro seison*/
    

    header("location:http://localhost/parcial "); /*me redirecciona a la pagina de inicio*/


       
?>



