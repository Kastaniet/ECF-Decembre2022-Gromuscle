<?php

namespace routes;

use controllers\Account;
use routes\base\Route;
use controllers\Main;
use controllers\ClientController;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {

        $main = new Main();
        $account = new Account();
        $clientControleur = new ClientController();
        
        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);
        Route::Add('/login', [$account, 'login']);
        Route::Add('/register', [$account, 'register']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/page/{id}', [$account, 'page']);
            Route::Add('/logout', [$account, 'logout']);
            Route::Add('/client', [$clientControleur, 'liste']);

        }
    }
}

