<?php

namespace Core;

class Route
{
    private $path;
    private $controller;
    private $action;

    public function __construct($path, $controller, $action)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }

    /**
     * Как вы видите, в этом классе свойства предназначены только для чтения, что достигается использованием магии.
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }

}