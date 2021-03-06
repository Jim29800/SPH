<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="3600 ; index.php">

    <link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
    <link rel="icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/creation_chantier.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/connexion.css">
    <link rel="stylesheet" href="assets/css/liste_chantier.css">
    <link rel="stylesheet" href="assets/css/alerte.css">
    
    <link rel="stylesheet" href="assets/css/fiche_client.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/recherche_client.css">
    
    
    <link rel="stylesheet" href="assets/css/fiche_chantier.css">
    <link rel="stylesheet" href="assets/css/galerie.css">
    <link rel="stylesheet" href="assets/css/gestion.css">


    <title>SPH</title>
    
</head>
<body>

<?php
    if($p !== 'connexion') {
        include(__DIR__.'/header.php'); 
        echo $content; 
    } else { 
        echo $content;
    }
    ?>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>



    <script src="//cdnjs.cloudflare.com/ajax/libs/list.pagination.js/0.1.1/list.pagination.min.js"></script>

    
    <script src="assets/js/liste_chantier.js"></script>
    <script src="assets/js/fiche_chantier.js"></script>
    <script src="assets/js/gestion.js"></script>


</body>
</html>