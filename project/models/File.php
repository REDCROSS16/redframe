<?php


namespace project\models;

use Core\Model;

class File extends Model
{
    public function getById($id)
    {
        return $this->findOne("SELECT * FROM files WHERE id=$id");
    }

    public function getAll()
    {
        return $this->findMany("SELECT * FROM files");
    }

    public function insertFile($name, $path)
    {
        $this->query("INSERT INTO files(name, path) VALUES ('$name', '$path')");
    }
}