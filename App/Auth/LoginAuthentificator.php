<?php

namespace App\Auth;

class LoginAuthentificator extends Authentic
{
    function login($login, $password): bool
    {
        if ($login == $password) {
            $_SESSION['user'] = $login;
            return true;
        } else {
            return false;
        }
    }
}