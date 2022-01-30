<?php
include('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link href=""/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <title>Animepool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="anime, manga, trilha, jpop" />
    <meta name="description" content="Site de Animes, Mangas e Trilhas" />
    <meta charset="utf-8" />
</head>

<body>
    <header>
    <div class="center">
        <div class="logo left" >
            <a href="http://localhost/Animepool-Project"></a>
        </div>
        <!--logo-->
        
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>Animepool-Project">Home</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Animes">Animes</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Mangas">Mangas</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Trilhas">Trilhas</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Contatos">Contatos</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Usuario">Usuario</a> </li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu">
               <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>Animepool-Project">Home</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Animes">Animes</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Mangas">Mangas</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Trilhas">Trilhas</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Contatos">Contatos</a> </li>
                <li><a href="<?php echo INCLUDE_PATH; ?>Usuario">Usuario</a> </li>
            </ul>
        </nav>
        </div>
        <div class="clear"></div>
    </header>
    
    <?php
    $url=isset($_GET['url'])?$_GET['url']:'home';    
    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }
    else{
        include('pages/404.php');
    }
    ?>

    <footer><div class="center"><p>Conteudo para demonstração</p></div>
    <div class="clear"></div>
</footer>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>

</html>