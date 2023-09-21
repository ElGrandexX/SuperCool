        ////var a = declarar la variable para almacenar una referencia. 
        //document= objeto document representa el documento html actual.
        //.getElementById("loginBtn"), Es un metodo del onbejto document, la funcion busca y selecciona el elemento utilizando el id.
        var a = document.getElementById("loginBtn");  
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        //Cambiamos el style
        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }
        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }