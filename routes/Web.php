<?php

namespace routes;

use controllers\Account;
use routes\base\Route;
use controllers\Main;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {

        $main = new Main();
        $account = new Account();
        
        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);
        Route::Add('/login', [$account, 'login']);
        Route::Add('/register', [$account, 'register']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/me', [$account, 'me']);
            Route::Add('/logout', [$account, 'logout']);
        }
    }
}

