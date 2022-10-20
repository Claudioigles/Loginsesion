<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrat datos del usuario</title>
</head>
<body>
    <h1>Usuario</h1>

        <a href="usuario.php"></a>
<?php
//Inicio sesion
    session_start();
    
   //Creo una cookie con el usuario ingresado
    setcookie('usuarioCookie',$_SESSION['usuario'], time()+2500);
//Si la cookie no esta vacia muestro el contenido
    if (isset($_COOKIE['usuarioCookie']))
    {
        echo 'El usuario almacendo en la cookies es: '.$_COOKIE['usuarioCookie'];

    }else{
        echo'No hay cookies';
    }

    echo '<br>';
   
      
   //Muestro el usuario de la sesion
    
    echo "Bienvenido: ".$_SESSION['usuario'];
   
?>

        
    <section>
        <header> <!--creo la barra de navegacion dentro de la etiqueta  header, o sea en la parte superior de la pantalla-->  
            <nav>
                <!--Creo la lista desordenadna con ul y con li creo los items de la lista-->
                <ul>
                    <li>
                        <a href="../index.html">Inicio</a><!--Aca pongo ../index.html para volver al inicio-->
                    </li>
                    <li>
                        <a href="contacto.html">Contacto</a><!--Saco el pages/ porque ya estoy en esa carpeta-->
                    </li>
                    <li>
                        <a href="ubicacion.html">Ubicación</a>
                    </li>
                    <li>
                        <a href="usuario.php">Usuario</a>
                    </li>
                   
                </ul>
            </nav>
            <section>
    <form action="datos.html" method="GET"></form>
</body>
</html>