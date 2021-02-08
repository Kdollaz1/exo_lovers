<?php
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}
function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
function calculAge($birthday){
    $origin = date_create($birthday);
    $target = date_create(date('Y-m-d'));
    $interval = date_diff($origin, $target);
    return $interval->format('%Y ans');
}

if(isset($_POST['sign_up'])){

    $lastname = valid_donnees($_POST["lastname"]);
    $firstname = valid_donnees($_POST["firstname"]);
    $birthday = valid_donnees($_POST["birthday"]);
    $cp = valid_donnees($_POST["cp"]);
    $email = valid_donnees($_POST["email"]);

    $erreurs = array();

    if(!isset($_POST["civilite"])){

        $erreurs['civilite'][] ='Veuillez renseigner votre genre';
    
    }else{
        
        if(valid_donnees($_POST["civilite"]) != ("femme" || "homme")){
    
            $erreurs['civilite'][] ='Genre invalide';

        }
        
    }
    if(!isset($_POST["recherche"])){

        $erreurs['recherche'][] ='Veuillez renseigner votre recherche';
    
    }else{
        
        if(valid_donnees($_POST["recherche"]) != ("femme" || "homme")){
        
            $erreurs['recherche'][] ='Genre invalid';
        
        }
        
    }if(empty($lastname)){

        $erreurs['lastname'][] ='Veuillez renseigner votre prénom';

    }else{

        if( preg_match("#^[A-Za-z ç'-]+$#", $lastname) == false ){

            $erreurs['lastname'][] ='Le prénom doit comporter uniquement des lettres';
    
        }if(strlen($lastname) > 30){
    
            $erreurs['lastname'][] ='Le prénom ne doit pas excéder 30 caractères';
    
        }

    }if(empty($firstname)){
                
        $erreurs['firstname'][] ='Veuillez renseigner votre nom';

    }else{

        if(preg_match("#^[A-Za-z ç'-]+$#", $firstname) == false ){

            $erreurs['firstname'][] ='Le nom doit comporter uniquement des lettres';
    
        }if(strlen($firstname) > 30){
    
            $erreurs['firstname'][] ='Le nom ne doit pas excéder 30 caractères';
    
        }

    }if(empty($birthday)){

        $erreurs['birthday'][] ='Veuillez renseigner votre date de naissance';

    }else{

        if(!validateDate($birthday)){

            $erreurs['birthday'][] ='Date de naissance invalide';
    
        }if(substr($birthday, 0,4) < 1900 || $birthday > date("Y-m-d")){
    
            $erreurs['birthday'][] ='Date de naissance improbable';
    
        }if(intval(substr($birthday, 0 ,4)) > date("Y") - 18  && intval(substr($birthday, 0 ,4)) <= date("Y") ){
    
            $erreurs['birthday'][] ='Vous êtes trop jeune pour vous inscrire';
    
        }

    }if(empty($cp)){
        
        $erreurs['cp'][] ='Veuillez renseigner votre code postal';

    }else{

        if(preg_match("#^[0-9]{5}$#", $cp) == false ){
        
            $erreurs['cp'][] ='Votre code postal ne doit contenir 5 chiffres';
    
        }if($cp == 00000 ){
            
            $erreurs['cp'][] ='Votre code postal n\'existe pas';
    
        }

    }
    if(empty($email)){
        
        $erreurs['email'][] ='Veuillez renseigner votre email';

    }else{

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            $erreurs['email'][] ='Adresse mail invalide';

        }
    }


    if(!empty($erreurs)){

        // Il y a des erreurs 
        // var_dump($erreurs);
        // echo'il y a des erreurs';

    }else{

        //Le formulaire est valide
        //On met les données dans un tableau
        $user = array(

            'civilite' => valid_donnees($_POST["civilite"]),
            'recherche' => valid_donnees($_POST["recherche"]),
            'lastname' => $lastname,
            'firstname' => $firstname,
            'birthday' => $birthday,
            'cp' => $cp,
            'email' => $email
        );
        // On encode ce tableau
        $user_json = json_encode($user);
        //Et on le met dans un cookie
        setcookie('user_json', $user_json, time() + 24*3600 , "/");
        //Puis on réactualise la page pour detecter notre cookie
        header("Refresh:0");
        exit(); 
    }

}


