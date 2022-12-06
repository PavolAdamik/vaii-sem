<?php
$layout = 'auth';
/** @var Array $data */
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-header p-5 pb-4 border-bottom-0">
                    <div class="container">
                        <a class="navbar-brand" href="index.php"><img src="public/images/PP_logo.jpg" width="50" height="50" alt=""></a>
                        <h1 class="fw-bold mb-0 fs-2 text-black">Prihlásenie</h1>
                    </div>
                </div>
                <div class="card-body p-5 pt-0">
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-sign" method="post" action="<?= \App\Config\Configuration::LOGIN_URL ?>">
                        <div class="form-label-group mb-3">
                            <input name="login" type="text" id="login" class="form-control" placeholder="email@gmail.com"
                                   required autofocus>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control"
                                   placeholder="Password" required>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-15 btn-success" type="submit" name="submit">Prihlásiť sa</button>
                        <div class="text-center">Ešte nemáte vytvorený účet? <a href="?c=auth&a=register">Registrovať sa</a></div>
                        <div class="text-center mt-2">
                            <a class="nav-link" href="?c=home">Späť na hlavnú stránku</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<div class="container">-->
<!--    <form class="form-sign" action="--><?//= \App\Config\Configuration::LOGIN_URL ?><!--" method="post">-->
<!--        <div class="row main-content bg-success text-center">-->
<!--            <div class="col-md-4 text-center company__info">-->
<!--                <a class="navbar-brand" href="index.php"><img src="public/images/PP_logo.jpg" width="50" height="50" alt=""></a>-->
<!---->
<!--                <h4 class="company_title">Palova Požičovňa</h4>-->
<!--            </div>-->
<!--            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="nadpisH1">-->
<!--                        <h2>Prihlásenie do Vášho účtu</h2>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="form-group">-->
<!--                            <div class="row">-->
<!--                                <input type="email" name="email" id="email" class="form__input" placeholder="Email">-->
<!--                            </div>-->
<!--                            <div class="row">-->
<!--                                 <span class="fa fa-lock"></span> -->
<!--                                <input type="password" name="password" id="password" class="form__input" placeholder="Heslo">-->
<!--                            </div>-->
<!--                            <div class="row">-->
<!--                                <input type="checkbox" name="remember_me" id="remember_me" class="">-->
<!--                                <label for="remember_me">Zapamätať si ma!</label>-->
<!--                            </div>-->
<!--                            <div class="align-center">-->
<!--                                <input type="submit" name="submit" value="Prihlásiť sa" class="login_btn">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <p>Ešte nemáte účet? <a href="registration.php">Registrovať sa</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">-->
<!--            <div class="card card-signin my-5">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title text-center">Prihlásenie</h5>-->
<!--                    <div class="text-center text-danger mb-3">-->
<!--                        --><?//= @$data['message'] ?>
<!--                    </div>-->
<!--                    <form class="form-sign" action="--><?//= \App\Config\Configuration::LOGIN_URL ?><!--" method="post">-->
<!--                    <div class="row main-content bg-success text-center">-->
<!--                        <div class="col-md-4 text-center company__info">-->
<!--                            <a class="navbar-brand" href="index.php"><img src="public/images/PP_logo.jpg" width="50" height="50" alt=""></a>-->
<!---->
<!--                            <h4 class="company_title">Palova Požičovňa</h4>-->
<!--                        </div>-->
<!--                        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">-->
<!--                            <div class="container-fluid">-->
<!--                                <div class="nadpisH1">-->
<!--                                    <h2>Prihlásenie do Vášho účtu</h2>-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="form-group">-->
<!--                                        <div class="row">-->
<!--                                            <input type="email" name="email" id="email" class="form__input" placeholder="Email">-->
<!--                                        </div>-->
<!--                                        <div class="row">-->
<!--                                             <span class="fa fa-lock"></span>-->
<!--                                            <input type="password" name="password" id="password" class="form__input" placeholder="Heslo">-->
<!--                                            </div>-->
<!--                                            <div class="row">-->
<!--                                                <input type="checkbox" name="remember_me" id="remember_me" class="">-->
<!--                                                <label for="remember_me">Zapamätať si ma!</label>-->
<!--                                            </div>-->
<!--                                            <div class="align-center">-->
<!--                                                <input type="submit" name="submit" value="Prihlásiť sa" class="login_btn">-->
<!--                                            </div>-->
<!--                                            </div>-->
<!--                                            </div>-->
<!--                                            <div class="row">-->
<!--                                                <p>Ešte nemáte účet? <a href="registration.php">Registrovať sa</a></p>-->
<!--                                            </div>-->
<!--                                         </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                        </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
