<?php

namespace App\Models;

use App\Core\Model;

class Car_rent extends Model
{
    protected $id;
    protected $id_car;
    protected $id_user;
    protected $dat_rent;
    protected $dat_return;

    public function getUsers() {
        return User::getAll('id_user = ?', [$this->getIdUser()]);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdCar()
    {
        return $this->id_car;
    }

    /**
     * @param mixed $id_car
     */
    public function setIdCar($id_car): void
    {
        $this->id_car = $id_car;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getDatRent()
    {
        return $this->dat_rent;
    }

    /**
     * @param mixed $dat_rent
     */
    public function setDatRent($dat_rent): void
    {
        $this->dat_rent = $dat_rent;
    }

    /**
     * @return mixed
     */
    public function getDatReturn()
    {
        return $this->dat_return;
    }

    /**
     * @param mixed $dat_return
     */
    public function setDatReturn($dat_return): void
    {
        $this->dat_return = $dat_return;
    }


}