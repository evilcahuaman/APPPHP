<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión - Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/login.js"></script>
</head>
<body>
<h1>Iniciar sesión - Biblioteca</h1>
<form action="#" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <input type="button" value="Iniciar sesión" onclick="logueoBiblioteca()">
</form>
<p class='error-msg' id="msgerror" style="display: none"></p>
</body>
</html>