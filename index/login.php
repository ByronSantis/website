<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant XXI</title>
    <link rel="stylesheet" href="/styles/styles.css"></link>
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    <div class="bg-img">
        <div class="content">
            <header>Log-in</header>
            <form action="/index/bodega.php" method="POST" class="login_user.php">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Usuario" name="usuario">
                </div>
                    <div class="field space">
                        <span class="fa fa-lock"></span>
                        <input type="password" class="pass-key" required placeholder="Contraseña" name="contrasena">
                        <span class="show">Mostrar</span>
                    </div>
                    <div class="pass">
                       
                    </div>
                    <div class="field">
                        <input type="submit" value="Ingresar">
                    </div>
            </form>
        </div>
    </div>
</body>
<script src="/js/script.js"></script>
</html>