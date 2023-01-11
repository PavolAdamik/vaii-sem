<?php

namespace App\Controllers;

use App\Core\AControllerBase;

use App\Core\Responses\Response;
use App\Models\Vehicle_type;


class Vehicle_typesController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        switch ($action) {
            case "delete":
            case "create":
            case "store":
            case "edit":
                return $this->app->getAuth()->isLogged();
        }
        return true;
    }


    public function index():Response
    {
        $vehicle_types = Vehicle_type::getAll();
       return $this->html($vehicle_types);
    }

    public function delete() {
        $id = $this->request()->getValue('id');
        $vehicleTypeToDelete = Vehicle_type::getOne($id);
        $image = $vehicleTypeToDelete->getImageType();
        if ($vehicleTypeToDelete) {
            $vehicleTypeToDelete->delete();
            //apc_delete_file($files['image_type']['name']);
            unlink("public/images/".$image);
        }
        return $this->redirect("?c=vehicle_types");
    }

    public function store() {
        $id = $this->request()->getValue('id');
        $files = $this->request()->getFiles();
        if ($files['image_type']['error'] == UPLOAD_ERR_OK) {
            $vehicle_type = ($id ? Vehicle_type::getOne($id) : new Vehicle_type());
            $vehicle_type->setImageType($files['image_type']['name']);
            $vehicle_type->setNameType($this->request()->getValue('name_type'));
            $vehicle_type->setDescriptionType($this->request()->getValue('description_type'));
            $vehicle_type->save();

            $path = "public/images/".$files['image_type']['name'];
            move_uploaded_file($files['image_type']['tmp_name'], $path);
            return $this->redirect("?c=vehicle_types");
        } else {
            die('Image upload error');
        }
    }

    public function create() {
        return $this->html(new Vehicle_type(), viewName:  'create.form'); //new Vehicletype()
    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $vehicleTypeToEdit = Vehicle_type::getOne($id);
        $image = $vehicleTypeToEdit->getImageType();

        unlink("public/images/".$image);
       // if ($vehicleTypeToEdit) {
            return $this->html($vehicleTypeToEdit ,viewName: 'create.form'); //todo nie nahodou edit.form
       // }
    }
}