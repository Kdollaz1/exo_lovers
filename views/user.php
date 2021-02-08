<div class="container" id="user_information_div">
    <div class="row">
        <div class="col-5 mt-md-5 bg-white mx-auto ">
            <h1 class="text-center">Mes informations</h1>
            <p>Nom : <?= $user_cookie['lastname'] ?></p>
            <p>Prénom : <?= $user_cookie['firstname'] ?></p>
            <p>Genre : <?= $user_cookie['civilite'] ?></p>
            <p>Date de naissance : <?= date("d/m/Y",strtotime($user_cookie['birthday']))?></p>
            <p>Code Postal: <?= $user_cookie['cp'] ?></p>
            <p>Email : <?= $user_cookie['email'] ?></p>
            <p>Vous recherchez : des <?= $user_cookie['recherche'] ?>s</p>

            <button class="btn btn_primary"><a href="https://www.meetic.fr/unlogged/landing/?mtcmk=896674&gclid=Cj0KCQiA0-6ABhDMARIsAFVdQv994ZHOy3QeOhQepCiL1LntshQKeQySnj_kg5fWQY65D0SGdIkP1joaAni8EALw_wcB">Take my money !</a></button>
            <button class="btn btn_primary"><a href="controllers/user_controller.php">Effacer mon compte</a></button>
        </div>
    </div>
</div>