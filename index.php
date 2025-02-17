<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Dev Christiano - Tenha sua solução na Web</title>
        <link rel="icon" type="image/x-icon" href="img/Dev.ico">
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <?php include("templates/header_tags.php") ?>
    </head>
    <body>
    <?php include("templates/nav.php") ?>
    <?php 
    if($current_page == "contato.php"){
        echo "a";
    }
    ?>

    <?php include("templates/footer_scripts.php") ?>
    </body>
</html>