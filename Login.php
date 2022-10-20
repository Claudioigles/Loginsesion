<?php

    /*session_start();//Sirve para guardar o para mostrar un nombre guardado
   //Aca declaro la variable



   // $usuario=$_SESSION['usuario'];//aca se guarda en una variable de sesion lo que escribio el usuario
    
    //$contr=$_GET['contra'];
    
   
    
    //echo "Bienvenido $usuario";
    
    
    //echo '<br>';

    // session_destroy(); asi cierro sesion

    //Aca declaro las variable y con empty me fijo si la variable no esten vacia
         $usuario= $_POST['usuario'];
        $contra= $_POST['contra'];

          
//$_SESSION['usuario'] = $usuario;
        //Guardo el valor que escribio el usuario en una variable de sesion
        $_SESSION['usuario']=$usuario;

    if(!empty($_POST['usuario')&& !empty($_POST['contra']))
    {
        
        
        //con este otro if valido al usuario y la contraseña
        if($usuario==$usuario && $contra=='1234')
        {
            
            header("location:http://localhost/parcial/carrito/index.html");

        }
        else
        {
            //Con este else redirijo para que vuelva a cargar y pida la contraseña nuevamente ya que es incorrecta
            header("location:http://localhost/parcial/index.html");
        }

    }else{
        header("location:http://localhost/parcial/index.html");
    }
    

*/

        session_start();
    
        $usuario = $_POST['usuario'];
        $contra= $_POST['contra'];
          
        $_SESSION['usuario'] = $usuario;
        if($usuario==$usuario && $contra=='1234')
        {
            
            header("location:http://localhost/parcial/carrito/index.html");

        }
        else
        {
            //Con este else redirijo para que vuelva a cargar y pida la contraseña nuevamente ya que es incorrecta
            header("location:http://localhost/parcial/index.html");
        }

    
        

    

?>