<?php

namespace project\controllers;

use Core\Controller;

class FileController extends Controller
{
    public function show()
    {
        $this->title = 'File uploader';
        return $this->render('file/upload', '');
    }
}