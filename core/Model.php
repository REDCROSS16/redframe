<?php

namespace Core;

class Model
{
    private $link;

    public function __construct()
    {
        $this->link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        mysqli_query($this->link, "SETNAMES 'utf8'");
    }

    protected function findOne($query)
    {
        return
    }

    protected function findMany($query)
    {
        
    }
}