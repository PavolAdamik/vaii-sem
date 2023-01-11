<?php

namespace App\Config;

use App\Auth\Authentic;
use App\Auth\LoginAuthentificator;

/**
 * Class Configuration
 * Main configuration for the application
 * @package App\Config
 */
class Configuration
{
    public const APP_NAME = 'Palova Požičovňa';
    public const FW_VERSION = '2.0';

    public const DB_HOST = 'db';  // change to db, if docker you use docker
    public const DB_NAME = 'Autopozicovna_db';
    public const DB_USER = 'auto_user'; // change to vaiicko_user, if docker you use docker
    public const DB_PASS = 'db_user_pass';

    public const LOGIN_URL = '?c=vehicle_types'; // defaultna url po prihlaseni sa

    public const ROOT_LAYOUT = 'root';

    public const DEBUG_QUERY = false;

   // public const UPLOAD_DIR = "public/images/"; // ak nepojde, skusim uvodzovky

    public const AUTH_CLASS = LoginAuthentificator::class;
}