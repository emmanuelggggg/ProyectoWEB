<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/estilos.css" type="text/css" />
    <title>Registrar Usuario</title>
</head>
<body>
    <form action="/src/php/registrar.php" method="post" id="form">
        <div class="form">
            <div class="encabezado">
                <h1>Registro</h1>
            </div>
            <div class="campos">
                <div class="datos">
                    <input class="entradas" type="text" name="nombre" id="name" required>
                    <label for="">Nombre</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="email" name="correo" id="email" required>
                    <label for="">Correo</label>
                </div>
                <div class="datos">
                    <input class="entradas" type="password" name="password" id="password" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="datos">
                    <span class="rol">Roll : </span>
                    <select name="roll" required>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>
                <button type="submit">Registrar</button>
                <button type="button" onclick="location.href='../index.php'">Cancelar</button>
                <p id="alerta" class="alerta"></p>
            </div>
        </div>
    </form>
    <script src="/src/js/main.js"></script>
</body>
</html>