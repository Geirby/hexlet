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

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->handlers as $item) {
            list($route, $handlerMethod, $handler) = $item;
            $preparedRoute = preg_quote($route, '/');
            if ($method == $handlerMethod && preg_match("/^$preparedRoute$/i", $uri)) {
                echo $handler();
            }
        }
    }

    private function append($method, $route, $handler)
    {
        $this->handlers[] = [$route, $method, $handler];
    }
}

//exapmle
//require_once ('Renderer.php');
//require_once ('Template.php');
//use function App\Renderer\render;
//
//$app = new Application();
//
//$app->get('/', function () {
//    return render('index');
//});
//
//$app->get('/about', function () {
//    return render('about', [
//        'site' => 'hexlet.io',
//        'subprojects' => ['battle.hexlet.io', 'map.hexlet.io']
//    ]);
//});
//
//$app->run();