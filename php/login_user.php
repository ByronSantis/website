<?php

    //session_start();

    include 'cone.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //$contrasena = hash('sha512', $contrasena);
     
    $validar_login = mysqli_query($conexion, "SELECT COUNT(*) as contarUsuario FROM usuarios WHERE 
     usuario='".$usuario."' AND contrasena='".$contrasena."'");

    $numrows=mysqli_fetch_array($validar_login);  

    
    if($numrows ['contarUsuario'] > 0 ){
        $_SESSION['usuario'] = $usuario;
        header("location: ../index/bodega.php");
        exit;
    }else{
        echo'
            <script>
                alert("El usuario no existe, por favor registrese o inicie nuavamente")
                window.location = "../index/login.php";
            </script>
        ';
        exit;
    }
?>