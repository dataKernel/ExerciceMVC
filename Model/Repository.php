<?php
namespace Model;

use Helper\Container;

abstract class Repository
{
    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Container::getService('PDO');
    }
}