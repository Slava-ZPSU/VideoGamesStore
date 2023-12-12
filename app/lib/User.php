<?php

namespace app\models;

use app\core\Model;
use PDO;

abstract class User extends Model{
    protected $id;
    protected $name;
    protected $email;
    protected $type;

    /**
     * @param $id
     * @param $name
     * @param $price
     */
    function __construct($id, $name, $price) {
        parent::__construct();

        $this->id = $id;
        $this->name = $name;
        $this->email = $price;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
}