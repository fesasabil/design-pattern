<?php

class LaptopCatalogElectronic implements CatalogElectronicInterface
{
    protected $laptop;

    public function LaptopCatalogElectronic(Laptop $laptop)
    {
        $this->$laptop = $laptop;
    }

    
    public function listCatalog()
    {
        return $this->getBrand() + " by " + $this->getType();
    }
}