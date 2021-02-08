<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php
    //Traitement du formulaire dans index_controller
    include("controllers/index_controller.php");

    if(isset($_COOKIE['user_json'])){ // Si le cookie user_json existe déja

        //On récupère les infos du cookie sous forme de tableau
        $user_cookie = json_decode($_COOKIE['user_json'],1);
        // Dans le lovers controllers on a le tableau de lovers
        include("controllers/lovers_controller.php");

        include('templates/navbar.php');

        if(isset($_GET['informations'])){

            include('views/user.php');

        }else{

            include('views/lovers.php');
        }

    }elseif(!empty($erreurs)){ // Si il y a une erreurs dans le formulaire d'inscription

        include('views/form_errors.php');

    }else{ // Sinon on affiche le formulaire d'inscription

        include('views/form_sign_up.php');
    }

    ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>