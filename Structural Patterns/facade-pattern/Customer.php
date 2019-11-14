<?php

$customer = new Customer("1", "saya", "saya@saya.com");

$facade = new CustomerFacade();

$json = $facade->toJson($customer);