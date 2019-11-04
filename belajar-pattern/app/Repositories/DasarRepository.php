<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Dasar;

class DasarRepository implements MyInterface
{
    private $model;

    public function __construct(Dasar $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

}