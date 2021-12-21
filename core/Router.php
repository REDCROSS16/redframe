<?php

namespace Core;

class Router
{
    private $routes;

    public function getTrack($routes, $uri)
    {
        foreach ($routes as $route) {
            $pattern = $this->createPattern($route->path);
            if (preg_match($pattern, $uri, $params)) {
                $params = $this->clearParams($params);
                return new Track($route->controller, $route->action, $params);
            }
        }
        return new Track('error', 'not found');
    }


    /*
        Метод преобразует путь из роута в регуляку,
        подставляя вместо параметров роута именованные карманы
        к примеру, из адреса '/test/:var1/:var2/' метод
        сделает регулярку '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
    */
    private function createPattern($path)
    {
        return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
    }

    private function clearParams($params)
    {
        $result = [];
        foreach ($params as $key => $param) {
            if (!is_int($param)) {
                $result[$key] = $param;
            }
        }
        return $result;
    }

}
