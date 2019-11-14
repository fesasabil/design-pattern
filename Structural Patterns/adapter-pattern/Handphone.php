<?php

class Handphone
{
    private $brand;

    private $type;

    private $camera;

    public function Handphone($brand, $type, $camera)
    {
        $this->brand = $brand;
        $this->type = $type;
        $this->camera = $camera;
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


    public function getCamera()
    {
        return $this->camera;
    }

    public function setCamera($camera)
    {
        $this->type = $camera;
    }
}