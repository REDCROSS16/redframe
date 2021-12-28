<?php

namespace project\controllers;

use Core\Controller;

class ParserController extends Controller
{
    public function training()
    {
        $this->title = 'training';
        return $this->render('parser/training', []);
    }


    public function curl()
    {
        $this->title = 'Curl training';
        return $this->render('parser/curl', []);
    }
}