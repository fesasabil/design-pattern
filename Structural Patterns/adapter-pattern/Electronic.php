<?php

class Electronic
{
    public function list()
    {
        $list = new HandphoneCatalogElectronic(new Handphone("Samsung", "Galaxy A8"));

        $list = new LaptopCatalogElectronic(new Laptop("Lenovo", "Ideapad 330"));

        

    }
}