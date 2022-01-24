<?php
include('usuarios.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link href="estilo/style.css" rel="stylesheet" />
    <title>Animepool - Cadastro de Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="anime, manga, trilha, jpop" />
    <meta name="description" content="Cadastro de Usuario" />
    <meta charset="utf-8" />
</head>

<body>
    <header>
        <div class="center">
    <nav class="desktop right">
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="">Anime</a> </li>
            <li><a href="">Manga</a> </li>
            <li><a href="">Trilhas</a> </li>
            <li><a href="">Contato</a> </li>
            <li><a href="usuarios_html.php">Usuario</a> </li>
        </ul>
    </nav>
    <nav class="mobile right">
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="">Anime</a> </li>
            <li><a href="">Manga</a> </li>
            <li><a href="">Trilhas</a> </li>
            <li><a href="">Contato</a> </li>
            <li><a href="usuarios_html.php">Usuario</a> </li>
        </ul>
    </nav>
        </div>
    </header>
    <section class="formulario">
    <form method="post">
        <input type="text" name="nome" required />
        <input type="text" name="usuario" required />
        <input type="password" name="senha" required />
        <input type="text" name="email" required />
        <input type="submit" name="acao" value="Enviar" />
    </form>
    </section>
</body>

</html>