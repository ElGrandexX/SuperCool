<?php

    include 'conexion.php';

    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE
    email='$email' and contrasena'$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../index.html");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario inexistente");
                window.location = "registro.php";
            </script>
        ';
        exit;
    }
?>