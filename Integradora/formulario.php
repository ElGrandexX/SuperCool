<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/formulario.css">
    <title>Smart Locker</title>
</head>
<body>
    
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
                <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
            </div>
        </nav>
    <!----------------------------- Form ----------------------------------->    
        
            
            <!------------------- Login -------------------------->
        <form action="php/login_usuario.php" method="post" class="form-box">
            <div class="login-container" id="login">
                <div class="top">
                    <span>No tienes una cuenta? <a href="#" onclick="register()">Crear Cuenta</a></span>
                    <header>Inicia Sesion</header>
                </div>
                <div class="input-box">
                <input type="email" class="input-field" placeholder="Email" name="email">
                        <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Contraseña" name="contrasena">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input  type="submit" class="submit" value="Iniciar sesion">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check">Recuerdame</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Olvidaste tu contraseña?</a></label>
                    </div>
                </div>
            </div>
        </form>
            <!------------------- Registro -------------------------->
        <form action="php/registro.php" method="POST" class="form-box">
            <div class="register-container" id="register">
                    <div class="top">
                        <span>Tienes una cuenta? <a href="#" onclick="login()">Inicia sesion</a></span>
                        <header>Registrate</header>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Nombre" name="nombre">
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Apellido" name="apellido">
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Teléfono" name="telefono">
                        <i class="bx bx-phone"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" class="input-field" placeholder="Email" name="email">
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Usuario" name="usuario">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Contraseña" name="contrasena">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Confirmar Contraseña" name="confirmarContrasena">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Registrarte">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="register-check">
                            <label for="register-check">Recuerdame</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Terminos & Condiciones</a></label>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <script src="javascript/formulario.js"></script>

</body>
</html>