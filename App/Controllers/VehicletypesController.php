<?php

namespace App\Controllers;

use App\Core\AControllerBase;

use App\Core\Responses\Response;
use App\Models\Vehicletype;


class VehicletypesController extends AControllerBase
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
        $vehicletypes = Vehicletype::getAll();
       return $this->html($vehicletypes);
    }

    public function delete() {
        $id = $this->request()->getValue('id');
        $vehicleTypeToDelete = Vehicletype::getOne($id);
        $image = $vehicleTypeToDelete->getImageType();
        if ($vehicleTypeToDelete) {
            $vehicleTypeToDelete->delete();
            //apc_delete_file($files['image_type']['name']);
            unlink("public/images/".$image);
        }
        return $this->redirect("?c=vehicletypes");
    }

    public function store() {
        $id = $this->request()->getValue('id');
        $files = $this->request()->getFiles();
        if ($files['image_type']['error'] == UPLOAD_ERR_OK) {
            $vehicletype = ($id ? Vehicletype::getOne($id) : new Vehicletype());
            $vehicletype->setImageType($files['image_type']['name']);
            $vehicletype->setNameType($this->request()->getValue('name_type'));
            $vehicletype->setDescriptionType($this->request()->getValue('description_type'));
            $vehicletype->save();

            $path = "public/images/".$files['image_type']['name'];
            move_uploaded_file($files['image_type']['tmp_name'], $path);
            return $this->redirect("?c=vehicletypes");
        } else {
            die('Image upload error');
        }
    }

    public function create() {
        return $this->html(new Vehicletype(), viewName:  'create.form'); //new Vehicletype()
    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $vehicleTypeToEdit = Vehicletype::getOne($id);
        $image = $vehicleTypeToEdit->getImageType();

        unlink("public/images/".$image);
       // if ($vehicleTypeToEdit) {
            return $this->html($vehicleTypeToEdit ,viewName: 'create.form');
       // }
    }
}