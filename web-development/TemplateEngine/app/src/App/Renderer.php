<?php
// BEGIN (write your solution here)
namespace App\Renderer;
require_once ('Template.php');
use function App\Template\render as renderer;

define( 'PATH_TEMPLATE', dirname( dirname (__DIR__)) . '\resources\views\\');

function render($templateName, $vars = [])
{
    return renderer (PATH_TEMPLATE . $templateName . '.phtml', $vars);
}

//echo render('about', [
//    'site' => 'hexlet.io',
//    'subprojects' => ['battle.hexlet.io', 'map.hexlet.io']
//]);
// END

//echo dirname( dirname (__DIR__));