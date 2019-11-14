<?php

$store1 = new Store("Kafilah", "Jakarta", "Indonesia", "Gadget");

$store2 = $store1->clone();
$store2->setName("lapakterbuka");

$store3 = $store1->clone();
$store3->setName("Gadgetmurah");
$store3->setCity("Balikpapan");

$store4 = $store3->clone();
$store4->setName("Muslimahfes");
$store4->setCategory("Fashion");