<?php /** @var Array $data */ ?>
<!--<div class="row">-->
<!--    <div class="col">-->
<!--        <h3>Fakulta riadenia a informatiky</h3>-->
<!--        <strong>Adresa</strong>: Univerzitná 8215/1, 010 26 Žilina<br>-->
<!--        <strong>Tel. číslo</strong>: +421/41 513 4121<br>-->
<!---->
<!--        <strong>GPS</strong>: 49°12'6,4"N 18°45'42,6"E-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row mt-3">-->
<!--    <div class="col">-->
<!--        <iframe width="100%" height="300"-->
<!--                src="https://www.openstreetmap.org/export/embed.html?bbox=18.747396469116214%2C49.193792384417996%2C18.776578903198246%2C49.210336337994846&amp;layer=mapnik&amp;marker=49.202065053033984%2C18.761987686157227"></iframe>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row mt-3">-->
<!--    <div class="col">-->
<!--        <a href="?c=home">Späť na hlavnú stránku</a>-->
<!--    </div>-->
<!--</div>-->
<div class="kontainer">
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Kontaktuj nás</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5"> Máte nejaké otázky? Neváhajte a rovno nás kontaktujte. Náš tím Vám odpovie hneď, ako to bude možné a budeme sa snažiť zodpovedať všetky Vaše otázky, poprípade vyriešiť všetky Vaše problémy.</p>
        <div class="row mt-3">
                <div class="col">
                    <iframe width="100%" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=18.493251800537113%2C49.256706993071425%2C18.50483894348145%2C49.26247663414844&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=17/49.25959/18.49905&amp;layers=N">Zobraziť väčšiu mapu</a></small>
                </div>
            </div>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-4">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Meno">
                                <!--                                <label for="name" class="">Your name</label>-->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-4">
                                <input type="text" id="email" name="email" class="form-control" placeholder="email@gmail.com">
                                <!--                                <label for="email" class="">Your email</label>-->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-4">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Predmet">
                                <!--                                <label for="subject" class="">Subject</label>-->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-2">
                                <textarea id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Vaša správa"></textarea>
                                <!--                                <label for="message">Your message</label>-->
                            </div>

                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Odoslať</a>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Setechov 123, 013 53 Petrovice</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+421 902 123 456</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>palovapozicovna@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>