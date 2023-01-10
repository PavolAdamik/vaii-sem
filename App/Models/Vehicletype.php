<?php

namespace App\Models;

use App\Core\Model;

class Vehicletype extends Model
{
    protected $id;
    protected $image_type;
    protected $name_type;
    protected $description_type;

    public function getCars() {
        return Car::getAll('vehicletype_id = ?', [$this->getId()]);
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
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * @param mixed $image_type
     */
    public function setImageType(?string $image_type): void
    {
        $this->image_type = $image_type;
    }

    /**
     * @return mixed
     */
    public function getNameType()
    {
        return $this->name_type;
    }

    /**
     * @param mixed $name_type
     */
    public function setNameType(?string $name_type): void
    {
        $this->name_type = $name_type;
    }

    /**
     * @return mixed
     */
    public function getDescriptionType()
    {
        return $this->description_type;
    }

    /**
     * @param mixed $description_type
     */
    public function setDescriptionType(?string $description_type): void
    {
        $this->description_type = $description_type;
    }
}