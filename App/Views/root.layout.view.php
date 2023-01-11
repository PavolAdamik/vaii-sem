<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var Array $data */
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <link rel="stylesheet" href="public/css/rules.css">

    <script src="public/js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="?c=vehicle_types">
            <img src="public/images/PP_logo.jpg" title="<?= \App\Config\Configuration::APP_NAME ?>"
                 title="<?= \App\Config\Configuration::APP_NAME ?>">
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="?c=vehicle_types">Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=home&a=contact">Kontakt</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Výber auta
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?c=cars">Osobné auto</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item disabled" href="#">Dodávka</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item disabled" href="#">Autobus</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item disabled" href="#">Športové auto</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?c=questions">Otázky k prenájmu</a>
            </li>
            <?php if ($auth->isLogged()) { ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="pouzivatelia.php">Používatelia</a>
                </li>
            <?php } ?>
        </ul>
        <?php if ($auth->isLogged()) { ?>
            <span class="navbar-text ">Prihlásený používateľ: <b><?= $auth->getLoggedUserName() ?></b></span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?c=auth&a=logout">Odhlásenie</a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
<!--                    <a class="nav-link" href="--><?//= \App\Config\Configuration::LOGIN_URL ?><!--">Prihlásenie</a>-->
                    <a class="nav-link" href="?c=auth&a=login">Prihlásenie</a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>

    <div class="footer">
        <footer class="bg-dark text-center text-lg-start text-white">
            <div class="container p-4">
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Fakturačné údaje</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-white not-underline">PalovaPozicovna s.r.o.</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">Sídlo: Setechov 123, 013 53 Petrovice</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">IČO: 12345678</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">IČ DPH: SK12345678</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Kontakt</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="https://mail.google.com/mail/u/1/#inbox" class="text-white">palovapozicovna@gmail.com</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">+421 902 123 456</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Otváracie hodiny</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white not-underline">Pondelok-Piatok: 7:00-15:00</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">Sobota: 8:00-13:00</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">Nedela: zatvorené</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Lokalita</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white not-underline">Setechov 123</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">013 53</a>
                            </li>
                            <li>
                                <a class="text-white not-underline">Petrovice</a>
                            </li>
                            <li>
                                <a href="https://www.google.com/maps/place/013+53+Petrovice-Setechov/@49.2594221,18.4885039,15z/data=!4m13!1m7!3m6!1s0x4714638c2ae65657:0xa00f7d44d2f5060!2s013+53+Petrovice-Setechov!3b1!8m2!3d49.2594221!4d18.4972586!3m4!1s0x4714638c2ae65657:0xa00f7d44d2f5060!8m2!3d49.2594221!4d18.4972586" class="text-white ">mapa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright:
                <a class="text-white" href="https://palovaWebstranka.com/">palovaWebstranka.com</a>
            </div>
        </footer>
    </div>
</body>
</html>
