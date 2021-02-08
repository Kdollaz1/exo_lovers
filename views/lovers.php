<div class="container">
    <div class="card-columns pt-3">
        <?php
        $x = 0;
        foreach($list_members as $lover){
        $x ++;
        ?>
        <div class="card">
            <img src="<?= $lover['picture'] ?>" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $lover['lastname'] . " " . $lover['firstname'] . "<br>" . calculAge($lover['birthday']) ?></h5>
                <p class="card-text"><small class="text-muted"><?= $lover['zipcode'] ?></small></p>
                <p class="card-text"><?= $lover['description'] ?></p>
                <a class="btn" id="like" onclick="changeColor(this)" style="background-color: blue;">Like &#60;3</a>
            </div>
        </div>    

        <?php
        }
        ?>
    </div>
</div>

