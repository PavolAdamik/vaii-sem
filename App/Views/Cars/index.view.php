<?php

use App\Models\Car;
/** @var Car[] $data */
/** @var \App\Core\IAuthenticator $auth */

?>
<div>
    <img src="/public/images/titulka.jpg" alt="titulna fotka" class="responsive">
</div>

<div class="kontainer">
    <h3 class="nadpisH1">Naša ponuka:</h3>

    <?php if ($auth->isLogged()) { ?>
        <div>
            <a href="?c=cars&a=create" class="btn btn-success">Vytvor auto</a>
        </div>
    <?php } ?>

    <!--<div class="d-flex justify-content-lg-start flex-wrap margin">-->
    <div class="row row-cols-1 row-cols-md-3 g-3">

        <?php
        foreach ($data as $car) {
            ?>
            <!--    <div class="card mt-3" style="width: 18rem;">                 style="width: 28rem"     -->
            <div class="col">
                <div class="card border-dark margin" >
                    <?php if ($car->getImage()) { ?>
                        <a href="">
                            <img src="public/images/<?php echo  $car->getImage() ?>" class="card-img-top" height="220" alt="cannot load an image">
                        </a>
                    <?php } ?>
                    <div class="card-body text-end">
                        <h5 class="card-title"><?= $car->getName() ?></h5>
                        <p class="margin"> Cena od <?= $car->getMinPrice() ?> - <?= $car->getMinPrice() ?>&#8364; / deň</p>
                        <?php if ($auth->isLogged()) { ?>
                            <a href="?c=cars&a=delete&id=<?php echo $car->getId() ?>" class="btn btn-danger">Zmazat</a>
                            <a href="?c=cars&a=edit&id=<?php echo $car->getId() ?>" class="btn btn-warning">Upravit</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
