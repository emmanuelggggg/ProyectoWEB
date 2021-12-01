<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("../templates/header.php");?>
    <title>Iniciar Secion</title>
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
</body>
</html>