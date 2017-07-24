<?php
/**
 * Created by PhpStorm.
 * User: geirby
 * Date: 23.07.2017
 * Time: 10:57
 */

namespace App;

require_once('ApplicationInterface.php');

class Application implements ApplicationInterface
{
    public $getAnswer;
    public $postAnswer;

    public function get($path, $func)
    {
        $this->getAnswer[$path] = $func();
    }

    public function post($path, $func)
    {
        $this->postAnswer[$path] = $func();
    }

    public function run()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo $this->getAnswer[$_SERVER['REQUEST_URI']];
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $this->postAnswer[$_SERVER['REQUEST_URI']];
        }
    }
}

//example
$app = new Application();
$app->get('/', function () {
    return 'hello, world!';
});
$app->post('/sign_in', function () {
    return 'sign in';
});
$app->run();