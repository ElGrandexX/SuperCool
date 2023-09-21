<?php
    
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuario(nombre, apellido, telefono, email, usuario, contrasena)
              VALUES('$nombre', '$apellido', '$telefono', '$email', '$usuario', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            Registro exitoso;
        '
        echo ' 
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "php/formulario.php");
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "php/formulario.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>
