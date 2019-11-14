<?php

class Laptop
{
    private $brand;

    private $type;

    public function Laptop($brand, $type)
    {
        $this->brand = $brand;
        $this->type = $type;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}