<?php
namespace project\controllers;

use Core\Controller;

class PageController extends Controller
{
    public function index()
    {
//        echo 'Главная страница!';
        $this->title = 'Главная страница';
        $this->layout = 'index';
        return $this->render('page/index', [
//            'h2' => 'СУПЕРГЛАВНАЯ СТРАНИЦА',
//            'parsing' => file_get_contents('http://theory.phphtml.net'),

        ]);
    }
}