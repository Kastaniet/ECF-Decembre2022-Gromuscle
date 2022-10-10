<?php

namespace controllers;

use controllers\base\WebController;
use utils\Template;

class Main extends WebController
{
    function home(): string
    {
        return Template::render("views/global/home.php", array("date" => date("d-m-Y à H:i")));
    }
    
    function about(): string
    {
        return Template::render("views/global/about.php");
    }
}