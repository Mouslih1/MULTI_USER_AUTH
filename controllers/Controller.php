<?php

namespace Controllers;

class Controller
{
    protected $model;
    protected $modelName;

    public function __construct()
    {
        session_start();
        $this->model = new $this->modelName();
    }
}