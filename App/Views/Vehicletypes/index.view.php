

<?php

use App\Models\Vehicletype;
/** @var Vehicletype[] $data */
?>
<div class="d-flex justify-content-lg-start flex-wrap ">

    <?php
foreach ($data as $vehicletype) {
    ?><div class="card" style="width: 18rem;">
    <?php if ($vehicletype->getImageType()) { ?>
        <!--  App/public/images/ -->

        <img src="public/images/<?php echo $vehicletype->getImageType() ?>" class="card-img-top" height="160" alt="cannot load an image">
<?php } ?>
    <div class="card-body text-end">
<!--  App/public/images/       <div class="text-start mt-2 ">-->
        <h5 class="card-title"><?= $vehicletype->getNameType() ?></h5>
            <p class="margin"><?= $vehicletype->getDescriptionType() ?></p>
        <a href="?c=vehicletypes&a=delete&id=<?php $vehicletype->getIdType() ?>" class="btn btn-primary">Go somewhere</a>
    </div>
<!--    <input type="hidden" name="id_zobrazit" value="--><?//= $vehicletype->getIdType()?><!--">-->
</div>
<?php } ?>
</div>
