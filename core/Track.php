<?php

namespace Core;

/**
 * Class Track
 * который хранит информации о контролерах, экшенах, параметрах
 * @package Core
 */
class Track
{
    private $controller;
    private $action;
    private $params;

    public function __construct($controller, $action, $params)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}