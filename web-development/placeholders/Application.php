<?php

namespace App;

class Application
{
    private $handlers = [];

    public function get($route, $handler)
    {
        $this->append('GET', $route, $handler);
    }

    public function post($route, $handler)
    {
        $this->append('POST', $route, $handler);
    }

    private function append($method, $route, $handler)
    {
        // BEGIN (write your solution here)
        preg_match_all('#(?P<param>[\w]+)|(?P<id>:[\w]+)#i', $route, $matchRoute);
        $paramsArr = array_values(array_filter($matchRoute['param']));
        $idArr = array_values(array_filter($matchRoute['id']));

        $updatedRoute = '';
        foreach ($paramsArr as $key => $value) {
            $idName = preg_replace('#:#', '', $idArr[$key]);
            $updatedRoute .= '/' . $value . '/(?P<' . $idName . '>[\w]+)';
        }
        // END

        $this->handlers[] = [$updatedRoute, $method, $handler];
    }

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        //        $uri = '/users/3';
        //        $uri = '/users/3/articles/6';
        $method = $_SERVER['REQUEST_METHOD'];
        //        $method = 'GET';

        foreach ($this->handlers as $item) {
            list($route, $handlerMethod, $handler) = $item;
            $preparedRoute = str_replace('/', '\/', $route);
            $matches = [];
            if ($method == $handlerMethod && preg_match("/^$preparedRoute$/i", $uri, $matches)) {
                $arguments = array_filter($matches, function ($key) {
                    return !is_numeric($key);
                }, ARRAY_FILTER_USE_KEY);
                echo $handler($_GET, $arguments);
            }
        }
    }
}

//for example in PHP command line uncomment values;