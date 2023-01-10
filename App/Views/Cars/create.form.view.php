<form method="post" action="?c=cars&a=store" enctype="multipart/form-data">
    <?php /** @var \App\Models\Car $data */
    if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <div class="col my-2 ">
<!--        <input type="text" name="id" class="margin" placeholder="Zadaj ŠPZ" value="--><?php //echo $data->getId() ?><!--" ><br>-->
        <input type="text" name="vehicletypes_id" class="margin" placeholder="Zadaj id kategorie" value="<?php echo $data->getVehicletypesId() ?>"><br>
        <input type="file" name="image" class="margin" value="<?php echo $data->getImage() ?>"><br>
        <input type="text" name="name" class="margin" placeholder="Zadaj nazov" value="<?=$data->getName() ?>" ><br>

        <input type="text" name="min_price" class="margin" placeholder="Zadaj minimálnu cenu" value="<?=$data->getMinPrice() ?>" ><br>
        <input type="text" name="max_price" class="margin" placeholder="Zadaj maximálnu cenu" value="<?=$data->getMaxPrice() ?>" ><br>
        <input type="file" name="detail_image1" class="margin" accept="pictures/<?=$data->getDetailImage1() ?>"><br>
        <input type="file" name="detail_image2" class="margin" accept="pictures/<?=$data->getDetailImage2() ?>"><br>
        <input type="file" name="detail_image3" class="margin" accept="pictures/<?=$data->getDetailImage3() ?>"><br>
        <input type="checkbox" name="isRent" class="margin"  <?=$data->getIsRent()?>>Je prenajate?<br>
        <input type="text" name="year" class="margin" placeholder="Zadaj rok výroby" value="<?=$data->getYear() ?>" ><br>
        <input type="text" name="type" class="margin" placeholder="Zadaj typ vozidla" value="<?=$data->getType() ?>" ><br>
        <input type="submit" value="Odoslať" class="margin">
    </div>
</form>
