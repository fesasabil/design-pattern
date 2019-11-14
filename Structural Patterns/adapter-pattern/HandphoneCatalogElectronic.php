<?php

class HandphoneCatalogElectronic implements CatalogElectronicInterface
{
    protected $handphone;

    public function HandphoneCatalogElectronic(Handphone $handphone)
    {
        $this->$handphone = $handphone;
    }

    
    public function listCatalog()
    {
        return $this->getBrand() + " by " + $this->getType();
    }
}