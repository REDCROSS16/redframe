<?php
namespace project\controllers;

use Core\Controller;

class TestController extends Controller
{
    public function test()
    {
        $this->title = 'Тестовый контроллер';
        return $this->render('test/test',
            [
                'h1' => 'test',
            ]
        );
    }
}