<?php /** @var \App\Models\Vehicle_type $data */ ?>
<form method="post" action="?c=vehicle_types&a=store&id=<?php echo $data->getId() ?>" enctype="multipart/form-data">
    <?php   if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <div class="col my-2 ">
        <input type="file" name="image_type" class="margin" value="<?php echo $data->getImageType() ?>"><br>
        <input type="text" name="name_type" class="margin" placeholder="Zadaj nazov" value="<?php echo $data->getNameType() ?>">
        <br>
        <textarea name="description_type" rows="4" cols="50" placeholder="Zadaj popis"><?php echo $data->getDescriptionType() ?></textarea>
        <input type="submit" value="Odošli súbor" class="margin">
    </div>
</form>