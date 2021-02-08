<h1 class="text-center text-white p-3">BIENVENUE JEUNE <span>&#60;3</span> LOVER <span>&#60;3</span></h1>
<div class="container">
    <div class="row">
        <form class="bg-white mx-auto rounded mb-md-5 p-3 col-8" method="POST" action="index.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mt-md-5">
                    <div class="circle text-center rounded mx-auto">
                        <legend class="col-form-label">Vous êtes :</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civilite" id="cfemme" value="femme">
                            <label class="form-check-label" for="cfemme">Une femme</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civilite" id="chomme" value="homme">
                            <label class="form-check-label" for="chomme">Un homme</label>
                        </div>
                        <?php if(!empty($erreurs['civilite'])){ foreach($erreurs['civilite'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                    <br>
                    <div class="circle text-center rounded mx-auto">
                        <legend class="col-form-label">Vous recherchez :</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recherche" id="rfemme" value="femme">
                            <label class="form-check-label" for="rfemme">Une femme</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recherche" id="rhomme" value="homme">
                            <label class="form-check-label" for="rhomme">Un homme</label>
                        </div>
                        <?php if(!empty($erreurs['recherche'])){ foreach($erreurs['recherche'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">Prénom</label>
                        <input type="text" class="form-control <?=!empty($erreurs['lastname']) ? 'is-invalid' : 'is-valid'?>" id="lastname" placeholder="Votre prénom" name="lastname" value="<?=$lastname?>" required>
                        <?php if(!empty($erreurs['lastname'])){ foreach($erreurs['lastname'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                    <div class="form-group">
                        <label for="firstname"> Nom</label>
                        <input type="text" class="form-control <?=!empty($erreurs['firstname']) ? 'is-invalid' : 'is-valid'?>" id="firstname" placeholder="Votre nom" name="firstname" value="<?=$firstname?>"required>
                        <?php if(!empty($erreurs['firstname'])){ foreach($erreurs['firstname'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Date de naissance</label>
                        <input type="date" class="form-control <?=!empty($erreurs['birthday']) ? 'is-invalid' : 'is-valid'?>" id="birthday" placeholder="Votre date de naissance" name="birthday" value="<?=$birthday?>" required>
                        <?php if(!empty($erreurs['birthday'])){ foreach($erreurs['birthday'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                    <div class="form-group">
                        <label for="cp">Code Postal</label>
                        <input type="number" class="form-control <?=!empty($erreurs['cp']) ? 'is-invalid' : 'is-valid'?>" id="cp" placeholder="Code postal" name="cp" min="0" max="99999" value="<?=$cp?>"required> 
                        <?php if(!empty($erreurs['cp'])){ foreach($erreurs['cp'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control <?=!empty($erreurs['email']) ? 'is-invalid' : 'is-valid'?>" id="email" placeholder="Email" name="email" value="<?=$lastname?>"required>
                        <?php if(!empty($erreurs['email'])){ foreach($erreurs['email'] as $erreur){?>
                        <p class="obligation"><?=$erreur?></p>
                        <?php }}?>
                    </div>
                    <button type="submit" class="btn btn-primary justify-content-end" name="sign_up">Rencontrer nos célibataires !</button>
                </div>
            </div>
        </form>            
    </div>
</div>