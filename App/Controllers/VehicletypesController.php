<?php

namespace App\Controllers;

use App\Core\AControllerBase;

use App\Core\Responses\Response;
use App\Models\Vehicletype;


class VehicletypesController extends AControllerBase
{
    public function index():Response
    {
        $vehicletypes = Vehicletype::getAll();
       return $this->html($vehicletypes);
    }
}