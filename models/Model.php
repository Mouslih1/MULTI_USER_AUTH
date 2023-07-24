<?php

namespace Models;

use Database;

class Model
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = Database::getPDO();
    }
}