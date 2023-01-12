

<?php
//use App\Models\Questions;
/** @var \App\Models\Question[] $data */
/** @var \App\Core\IAuthenticator $auth */


?>

<div>
    <h1 class="nadpisH1">Najčastejčie otázky k prenájmu:</h1>
    <img src="public/images/titulka.jpg" alt="titulna fotka" class="responsive">
</div>

<!--    todo zamysliet sa ci mozu vsetci pridavat.. aj neprihlaseni -->
<?php //if ($auth->isLogged()) { ?>
    <div>
        <a href="?c=questions&a=create" class="btn btn-success" >Vytvor otázku</a>
    </div>
<?php // } ?>

<div class="kontainer">
    <script src="/public/js/toggle.js"></script>
    <div>
        <?php
        foreach ($data as $question) { ?>
                <div class="col">
                    <a class="question_link" href="javascript: void(0);"   onclick="toggle('<?php echo $question->getId() ?>')">
                        <h3 class="question_title"><?php echo $question->getQuestion() ?></h3>
                   </a>
                    <div id="<?php echo $question->getId() ?>" style="display: none;">
                        <p><?php echo $question->getReply() ?></p>
                        <!--    todo mozno posunut na koniec otazky alebo umoznit aj prihlasenym pridavat otazky-->
                        <?php if ($auth->isLogged()) { ?>
                            <a href="?c=questions&a=delete&id=<?php echo $question->getId() ?>" class="btn btn-danger">Zmazat</a>
                            <a href="?c=questions&a=edit&id=<?php echo $question->getId() ?>" class="btn btn-warning">Upravit</a>
                        <?php } ?>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>


<?php
/**
* Akým spôsobom si môžete prenajať vozidlo ?
 *Vozidlo si môžu prenajať len zaregistrovaný zákazníci. Zaregistrovať sa môžete vpravo hore pri nápise „Zaregistrujte sa / Prihláste sa". Po úspešnej registrácii si môžete na domovskej stránke nájsť sekciu s druhmy ponúkaných vozidiel a môžete si vybrať konkrétne vozidlo. K výberu vozidiel sa dosanete taktiež prostredníctvom navigačného baru.

Kto si môže prenajať vozidlo ?
 * Vozidlo si môže prenajať každá osoba, ktorá má: platný vodičský preukaz , minimálne 20 rokov, vodičský preukaz aspoň 4 roky, dostatok finančných prostriedkov na zálohu.
 *
 * Na ako dlho si môže prenajať vozidlo ?
 * Poskytujeme krátkodobý aj dlhodobý prenájom. Ak si zvolíte krátkodobý prenájom tak si môžete prenajať vozidlo od jedného dňa čo znamená minimálne na 24 hodín až po dobu 30 dní. Ak dlhodobý tak ten je viac, ako jeden mesiac.
 **/
?>