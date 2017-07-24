<?php

/**
 * Created by PhpStorm.
 * User: geirby
 * Date: 23.07.2017
 * Time: 10:56
 */
namespace App;

interface ApplicationInterface
{
    public function get($path, $func);
    public function post($path, $func);
    public function run();
}