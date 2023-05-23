<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Biblioteca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/biblioteca.css">
</head>
<body>
<?php
  include 'cabecera.php';
?>
<main>

    <section>
        <h2>Bienvenido a la Biblioteca Usuario <?php session_start(); echo $_SESSION["UsuarioLogueado"]["nombre"] ?></h2>
        <p>En nuestro catálogo encontrarás una gran variedad de libros para todos los gustos. ¡Explora nuestra colección!</p>
    </section>


    <section class="destacados">
        <h2>Libros destacados</h2>
        <ul>
            <li>
                <img src="libro1.jpg" alt="Libro 1">
                <h3>Libro 1</h3>
                <p>Autor: Autor 1</p>
            </li>
            <li>
                <img src="libro2.jpg" alt="Libro 2">
                <h3>Libro 2</h3>
                <p>Autor: Autor 2</p>
            </li>
            <li>
                <img src="libro3.jpg" alt="Libro 3">
                <h3>Libro 3</h3>
                <p>Autor: Autor 3</p>
            </li>
        </ul>
    </section>
    <section class="busqueda">
        <h2>Búsqueda de libros</h2>
        <form action="buscar.php" method="get">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo">
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor">
            <input type="submit" value="Buscar">
        </form>
    </section>
</main>
<footer>
    <p>Sistema de Biblioteca &copy; 2023</p>
</footer>
</body>
</html>