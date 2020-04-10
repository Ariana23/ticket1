<?php

namespace app\components\home;

use app\components\home\Service;

class Controller
{
    static function load()
    {
        $service = new Service();
        $service->buildMain();
    }
}