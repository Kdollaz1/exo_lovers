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
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">Prénom</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Votre prénom" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="firstname"> Nom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Votre nom" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Date de naissance</label>
                        <input type="date" class="form-control" id="birthday" placeholder="Date de naissance" name="birthday" required>
                    </div>
                    <div class="form-group">
                        <label for="cp">Code Postal</label>
                        <input type="number" class="form-control" id="cp" placeholder="Code postal" name="cp" min="0" max="99999" required> 
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary justify-content-end" name="sign_up">Rencontrer nos célibataires !</button>
                </div>
            </div>
        </form>            
    </div>
</div>