<form method="post" action="?c=questions&a=store" enctype="multipart/form-data"
<?php  /** @var \App\Models\Question $data */ { ?>
    <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
<?php } ?>
<div class="col my-2 ">
    <input type="text" name="new_question" class="margin" placeholder="Zadaj otázku" value="<?php echo $data->getQuestion() ?>"><br>
    <input type="text" name="new_reply" class="margin" placeholder="Zadaj odpoveď" value="<?php echo $data->getReply() ?>">
    <br>
    <input type="submit" value="Odošli súbor" class="margin">
</div>
</form>