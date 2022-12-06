<?php

namespace App\Models;

use App\Core\Model;

class Vehicletype extends Model
{
    protected $id_type;
    protected $image_type;
    protected $name_type;
    protected $description_type;

    /**
     * @return int
     */
    public function getIdType(): int
    {
        return $this->id_type;
    }

    /**
     * @param int $id_type
     */
    public function setIdType(int $id_type): void
    {
        $this->id_type = $id_type;
    }

    /**
     * @return string|null
     */
    public function getImageType(): ?string
    {
        return $this->image_type;
    }

    /**
     * @param string|null $image_type
     */
    public function setImageType(?string $image_type): void
    {
        $this->image_type = $image_type;
    }

    /**
     * @return string|null
     */
    public function getNameType(): ?string
    {
        return $this->name_type;
    }

    /**
     * @param string|null $name_type
     */
    public function setNameType(?string $name_type): void
    {
        $this->name_type = $name_type;
    }

    /**
     * @return string|null
     */
    public function getDescriptionType(): ?string
    {
        return $this->description_type;
    }

    /**
     * @param string|null $description_type
     */
    public function setDescriptionType(?string $description_type): void
    {
        $this->description_type = $description_type;
    }
}