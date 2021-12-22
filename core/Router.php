<?php

namespace Core;

class Router
{
    public function getTrack($routes, $uri)
    {
        foreach ($routes as $route) {
            $pattern = $this->createPattern($route->path);
            # првоеряет ури на шаблон и запихивает все совпадения в парамс
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

    /**
     * Перебираем параметры
     * @param $params
     * @return array
     */
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