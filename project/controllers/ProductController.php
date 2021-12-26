<?php

namespace project\controllers;

use Core\Controller;
use project\models\Product;

class ProductController extends Controller
{
    public function all()
    {
        $this->title = 'Все доступные товары';
        $products = (new Product) -> getAll();
        return $this->render('product/all',
        [
            'products' => $products,
            'h1' => 'Доступные продукты',
        ]);
    }

    public function one($params)
    {
        $product = (new Product) ->getById($params['id']);

        $this->title = $product['name'];

        return $this->render('product/one',
        [
            'h1' => "Продукт {$product['name']}",
            'product'  => $product,
        ]);
    }
}