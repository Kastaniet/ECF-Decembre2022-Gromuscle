<?php

namespace routes;

use controllers\SampleApiController;
use routes\base\Route;

class Api
{
    function __construct()
    {
        $videoApiController = new SampleApiController();

    }
}

