<?php 
// O uso do __dir__ faz o caminho até o template.
include  __DIR__ . '/config.php' 
?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php 
    // $_SERVER['REQUEST_URI'] eu obtenho o caminho da url

    switch($_SERVER['REQUEST_URI']){
        case BASE_URL . 'pages/sobre.php':
            ?>
            <title>Dev Christiano - Um pouco da minha história!</title>
            <meta name="description" content="Conheça como, eu Christiano resolvi ser um desenvolvedor e realizador de sonhos.">
            <?php break;
        case BASE_URL . 'pages/projetos.php':
            ?>
            <title>Dev Christiano - Meus projetos</title>
            <meta name="description" content="Conheça um pouco de como, eu Christiano resolvi ser um desenvolvedor e realizador de sonhos.">
            <?php break;
        case BASE_URL . 'pages/contato.php':
            ?>
            <title>Dev Christiano - Entre em contato!</title>
            <meta name="description" content="Tenha sua solução na web por um preço acessível! Entre em contato comigo!">
            <?php break;
        default:
            ?>
            <title>Dev Christiano - Tenha sua solução na Web!</title>
            <meta name="description" content="Tenha sua solução na Web">
            <?php break;
        }
    ?>    
    <meta charset="UTF-8">
<<<<<<< HEAD
    <link rel="icon" type="image/x-icon" href="<?php BASE_URL ?> img/Dev.ico">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="<?php BASE_URL ?>styles/base.css" rel="stylesheet">
=======
    <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>img/Dev.ico">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?= BASE_URL ?>styles/base.css" rel="stylesheet">
>>>>>>> 2005cf35f8d0bc353cc37adc524f268c2353ccd7
</head>
<body>
<?php include  __DIR__ . '/nav.php'; ?> 
