<?php

namespace project\controllers;

use Core\Controller;

class FileController extends Controller
{
    public function upload()
    {
        $this->title = 'File uploader';
        return $this->render('file/upload', '');
    }
}