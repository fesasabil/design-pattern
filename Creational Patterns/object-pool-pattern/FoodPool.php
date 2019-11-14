<?php

class FoodPool
{
    private $occupiedFoods = [];
    private $freeFoods = [];
    private $name = ['Pizza', 'Humburger', 'Hotdog', 'Stick'];

    public function getFood()
    {
        if (count($this->freeFoods) == 0) {
            $id = count($this->occupiedFoods) + count($this->freeFoods) + 1;
            $randomName = array_rand($this->names, 1);

            $food = new FoodEntity($id, $this->names[$randomName]);
        } else {
            $food = array_pop($this->freeFoods);

            $this->occupiedFoods[$food->getId()] = $food;

            return $food;
        }
    }

    public function release(FoodEntity $food)
    {
        $id = $food->getId();

        if (isset($this->occupiedFoods[$id])) {
            unset($this->occupiedFoods[$id]);
            $this->freeFoods[$id] = $food;
        }
    }
}