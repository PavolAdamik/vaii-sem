<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Car_rent;

//todo: to davat kazdej veci takto controlleri ?`
class Car_rentsController extends AControllerBase
{

    public function index(): Response
    {
        $car_rent = Car_rent::getAll();
        return $this->html($car_rent);
    }

    public function authorize($action)
    {
        switch ($action) {
            case "delete":
            case "create":
            case "store":
            case "edit":    //asi bez edit.. naco budem editovat tabulku.. ak sa pomyli ? .. mozno
                return $this->app->getAuth()->isLogged();
        }
        return true;
    }
}