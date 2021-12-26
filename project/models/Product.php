<?php

namespace  project\models;

use Core\Model;

class Product extends Model
{

    public function getAll()
    {
        return $this->findMany("SELECT * FROM product");
    }

    public function getById($id)
    {
        return $this->findOne("SELECT * FROM  product WHERE id =$id");
    }
}