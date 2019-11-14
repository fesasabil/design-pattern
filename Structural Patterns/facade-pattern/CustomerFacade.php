<?php

class CustomerFacade
{
    function toJson(Customer $customer): String
    {

        $customerArray = [
            "id" => $customer->getId(),
            "name" => $customer->getName(),
            "email" => $customer->getEmail()
        ];

        $json = json_encode($customerArray, JSON_PRETTY_PRINT);

        return $json;
    }
}