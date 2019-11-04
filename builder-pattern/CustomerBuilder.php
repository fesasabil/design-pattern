<?php

class CustomerBuilder
{
    private $id;

    private $name;

    private $phone;

    private $email;

    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    
    /**
     * Construct
     */
    public function build(): Customer
    {
        return new Customer(
            $this->id,
            $this->name,
            $this->phone,
            $this->email
        );
    }

}