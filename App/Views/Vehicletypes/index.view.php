

<?php

use App\Models\Vehicletype;
/** @var Vehicletype[] $data */
/** @var \App\Core\IAuthenticator $auth */

?>
<div>
    <div>
        <?php if($auth->isLogged()) { ?>
            <h1 class="nadpisH1">Vitajte <?= $auth->getLoggedUserName() ?> !</h1>
        <?php } ?>
        <img src="public/images/titulka.jpg" alt="titulna fotka" class="responsive">
    </div>

    <div>
        <p class="popisObchodu">
            Hľadáte auto na krátku alebo dlhú dobu ? Neváhajte a požičajte si jedno (dve :D) v našej požičovni PP čo výrazne a jasne charakterizuje Palovu Požičovňu. V ponuke máme ojazdené autá každeho druhu, cez osobné, šporotvé, dodávky a dokonca aj autobsy. Samozrejme máme aj nové autá ale Boh ťa chráň ak ho nabúraš. Môžete si vybrať z akejkoľvek značky (okrem tých drahých, ako je Lamborginy a Jaguar).
        </p>
        <?php if ($auth->isLogged()) { ?>
            <div>
                <a href="?c=vehicletypes&a=create" class="btn btn-success" >Vytvor typ</a>
            </div>
        <?php } ?>
    </div>

    <div class="kontainer">

        <h3 class="nadpisH1">Naša ponuka:</h3>



        <!--<div class="d-flex justify-content-lg-start flex-wrap margin">-->
        <div class="row row-cols-1 row-cols-md-4 g-3">

            <?php
            foreach ($data as $vehicletype) {
                ?>
                <!--    <div class="card mt-3" style="width: 18rem;">-->
                <div class="col">
                    <div class="card border-dark" style="height: auto">
                        <?php if ($vehicletype->getImageType()) { ?>
                            <a href="?c=cars">
                                <img src="public/images/<?php echo  $vehicletype->getImageType() ?>" class="card-img-top" height="240" alt="cannot load an image">
                            </a>
                        <?php } ?>
                        <div class="card-body text-end">
                            <h5 class="card-title"><?= $vehicletype->getNameType() ?></h5>
                            <p class="margin"><?= $vehicletype->getDescriptionType() ?></p>
                            <?php if ($auth->isLogged()) { ?>
                                <a href="?c=vehicletypes&a=delete&id=<?php echo $vehicletype->getId() ?>" class="btn btn-danger">Zmazat</a>
                                <a href="?c=vehicletypes&a=edit&id=<?php echo $vehicletype->getId() ?>" class="btn btn-warning">Upravit</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

