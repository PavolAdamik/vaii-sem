<?php

namespace App\Models;

use App\Core\Model;

class Car extends Model
{
    protected $id;
    protected $vehicletypes_id;
    protected $image;
    protected $name;
    protected $min_price;
    protected $max_price;
    protected $detail_image1;
    protected $detail_image2;
    protected $detail_image3;
    protected $isRent;
    protected $year;
    protected $type;




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
    public function getVehicletypesId()
    {
        return $this->vehicletypes_id;
    }

    /**
     * @param mixed $vehicletypes_id
     */
    public function setVehicletypesId($vehicletypes_id): void
    {
        $this->vehicletypes_id = $vehicletypes_id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMinPrice()
    {
        return $this->min_price;
    }

    /**
     * @param mixed $min_price
     */
    public function setMinPrice($min_price): void
    {
        $this->min_price = $min_price;
    }

    /**
     * @return mixed
     */
    public function getMaxPrice()
    {
        return $this->max_price;
    }

    /**
     * @param mixed $max_price
     */
    public function setMaxPrice($max_price): void
    {
        $this->max_price = $max_price;
    }

    /**
     * @return mixed
     */
    public function getDetailImage1()
    {
        return $this->detail_image1;
    }

    /**
     * @param mixed $detail_image1
     */
    public function setDetailImage1($detail_image1): void
    {
        $this->detail_image1 = $detail_image1;
    }

    /**
     * @return mixed
     */
    public function getDetailImage2()
    {
        return $this->detail_image2;
    }

    /**
     * @param mixed $detail_image2
     */
    public function setDetailImage2($detail_image2): void
    {
        $this->detail_image2 = $detail_image2;
    }

    /**
     * @return mixed
     */
    public function getDetailImage3()
    {
        return $this->detail_image3;
    }

    /**
     * @param mixed $detail_image3
     */
    public function setDetailImage3($detail_image3): void
    {
        $this->detail_image3 = $detail_image3;
    }

    /**
     * @return mixed
     */
    public function getIsRent()
    {
        return $this->isRent;
    }

    /**
     * @param mixed $isRent
     */
    public function setIsRent($isRent): void
    {
        $this->isRent = $isRent;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }


}