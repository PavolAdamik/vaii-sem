    <?php /** @var \App\Models\Question $data */ ?>

<form method="post" action="?c=questions&a=store&id=<?php echo $data->getId() ?>" enctype="multipart/form-data"
    <?php    if ($data->getId()){ ?>
             <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <div class="col my-2 ">
        <label for="new_question">Otázka</label><br/>
        <input id="new_question" type="text" name="new_question" class="margin" placeholder="Zadaj otázku"
               value="<?php echo $data->getQuestion() ?>"><br/>
        <label for="new_reply">Odpoveď na otázku</label><br/>
        <textarea id="new_reply" name="new_reply" class="margin" placeholder="Zadaj odpoveď"><?php echo $data->getReply() ?></textarea>
        <br/>
        <input type="submit" value="Uložiť otázku" class="margin">
    </div>
</form>