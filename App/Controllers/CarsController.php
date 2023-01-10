<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Car;


class CarsController extends AControllerBase
{

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

    public function index(): Response
    {
        $cars = Car::getAll();
        return $this->html($cars);
    }

    public function delete() {
        $id = $this->request()->getValue('id');
        $carToDelete = Car::getOne($id);
        $image1 = $carToDelete->getImage();
        $image2 = $carToDelete->getDetailImage1();
        $image3 = $carToDelete->getDetailImage2();
        $image4 = $carToDelete->getDetailImage3();

        if ($carToDelete) {
            $carToDelete->delete();
            unlink("public/images/".$image1);
            unlink("public/images/".$image2);
            unlink("public/images/".$image3);
            unlink("public/images/".$image4);
        }
        return $this->redirect("?c=cars");
    }

    public function store() {
        $id = $this->request()->getValue('id');
        $files = $this->request()->getFiles();
        if ($files['image']['error'] == UPLOAD_ERR_OK && $files['detail_image1']['error'] == UPLOAD_ERR_OK && $files['detail_image2']['error'] == UPLOAD_ERR_OK && $files['detail_image3']['error'] == UPLOAD_ERR_OK) {
            $car = ($id ? Car::getOne($id) : new Car()); // spadne to na tom ze car este nema id a ono to taha z databazy to neexistujuce car
            //$car=new Car();
            //$car->setId($id);
            $car->setVehicletypesId($this->request()->getValue('vehicletypes_id'));
            $car->setImage($files['image']['name']);
            $car->setName($this->request()->getValue('name'));
            $car->setMinPrice($this->request()->getValue('min_price'));
            $car->setMaxPrice($this->request()->getValue('max_price'));
            $car->setDetailImage1($files['detail_image1']['name']);
            $car->setDetailImage2($files['detail_image2']['name']);
            $car->setDetailImage3($files['detail_image3']['name']);
            $isRent = '0';
            if ($this->request()->getValue('isRent') == 'on') {
                $isRent = '1';
            }
            $car->setIsRent($isRent);
            $car->setYear($this->request()->getValue('year'));
            $car->setType($this->request()->getValue('type'));

            $car->save();

            $path1 = "public/images/".$files['image']['name'];
            $path2 = "public/images/".$files['detail_image1']['name'];
            $path3 = "public/images/".$files['detail_image2']['name'];
            $path4 = "public/images/".$files['detail_image3']['name'];

            move_uploaded_file($files['image']['tmp_name'], $path1);
            move_uploaded_file($files['detail_image1']['tmp_name'], $path2);
            move_uploaded_file($files['detail_image2']['tmp_name'], $path3);
            move_uploaded_file($files['detail_image3']['tmp_name'], $path4);

            return $this->redirect("?c=cars");
        } else {
            die('Image upload error');
        }
    }

    public function create() {
        //$id = $this->request()->getValue('id');


        return $this->html(new Car(), viewName:  'create.form');
    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $carToEdit = Car::getOne($id);
        $image1 = $carToEdit->getImage();
        $image2 = $carToEdit->getDetailImage1();
        $image3 = $carToEdit->getDetailImage2();
        $image4 = $carToEdit->getDetailImage3();


        unlink("public/images/".$image1);
        unlink("public/images/".$image2);
        unlink("public/images/".$image3);
        unlink("public/images/".$image4);

        // if ($vehicleTypeToEdit) {
        return $this->html($carToEdit ,viewName: 'create.form');
        // }
    }
}