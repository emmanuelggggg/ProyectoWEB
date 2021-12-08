<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/estilos.css" type="text/css" />
    <title>Iniciar Sesion</title>
</head>
<body style="margin:0px;">
    <form action="/src/php/iniciar.php" method="post" id="form">
        <div class="form">
            <div class="encabezado">
                <h1>Iniciar Secion</h1>
            </div>
            <div class="campos">
                <div class="datos">
                    <input class="entradas" type="email" name="correo" id="email" required>
                    <label for="">Correo</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="password" name="password" id="password" required>
                    <label for="">Contraseña</label>
                </div>
                <button type="submit">Iniciar</button>
                <button type="button" onclick="location.href='../index.php'">Cancelar</button>
                <p id="alerta" class="alerta"></p>
            </div>
        </div>
    </form>
    <script src="/src/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/src/js/loginForm.js"></script>
</body>
</html>