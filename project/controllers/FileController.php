<?php

namespace project\controllers;

use Core\Controller;
use project\models\File;

class FileController extends Controller
{
    public function upload()
    {
        $this->title = 'File uploader';
        return $this->render('file/upload', []);
    }

    public static function makeUpload($file)
    {
        // формируем уникальное имя картинки: случайное число и name
        $name = mt_rand(0, 10000) . $file['name'];
        $path = 'project/files/img/';
        copy($file['tmp_name'], $path . $name);
        (new File()) ->insertFile($name, $path . $name);
    }

    public static function canUpload($file)
    {
        // если имя пустое, значит файл не выбран
        if ($file['name'] == '') return 'Вы не выбрали файл.';

        /* если размер файла 0, значит его не пропустили настройки
        сервера из-за того, что он слишком большой */
        if ($file['size'] == 0) return 'Файл слишком большой.';

        // разбиваем имя файла по точке и получаем массив
        $getMime = explode('.', $file['name']);
        // нас интересует последний элемент массива - расширение
        $mime = strtolower(end($getMime));
        // объявим массив допустимых расширений
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

        // если расширение не входит в список допустимых - return
        if (!in_array($mime, $types)) return 'Недопустимый тип файла.';

        return true;
    }


    public function getfile($params)
    {
        $this->title = 'upload file';
        if (isset($_FILES)) {
            var_dump('1');
        }

        return $this->render('file/file', [
            'file' => $params['name'],
        ]);
    }

    public function all ()
    {
        $files = (new File) ->getAll();
        $this->title = 'Все файлы!';
        return $this->render('file/all', [
            'files' => $files,
    ]);
    }
}


