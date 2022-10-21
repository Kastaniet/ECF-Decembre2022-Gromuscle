<?php

namespace routes;

use controllers\Account;
use routes\base\Route;
use controllers\Main;
use controllers\ClientController;
use controllers\EmailController;
use controllers\FicheController;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {

        $main = new Main();
        $account = new Account();
        $clientControleur = new ClientController();
        $ficheControleur = new FicheController();
        $emailControleur = new EmailController();
        
        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);
        Route::Add('/login', [$account, 'login']);
        Route::Add('/register', [$account, 'register']);

        if (SessionHelpers::isLogin()) {
            Route::Add('/page/{id}', [$account, 'page']);
            Route::Add('/logout', [$account, 'logout']);
            Route::Add('/client', [$clientControleur, 'liste']);
            Route::Add('/ficheClient/{id}', [$ficheControleur, 'fiche']);
            Route::Add('/email', [$emailControleur, 'email']);
            if ($_SESSION['user']['roles'] == 'Tech' || $_SESSION['user']['roles'] == 'Admin') {
                Route::Add('/client/active', [$clientControleur, 'active']);
                Route::Add('/client/desactive', [$clientControleur, 'desactive']);
                Route::Add('/formulaire/client', [$clientControleur, 'formClient']);
                Route::Add('/formulaire/adresse/{clientId}', [$ficheControleur, 'formAdresse']);
                Route::Add('/ficheClient/members_readActivated', [$ficheControleur, 'members_readActivated']);
                Route::Add('/ficheClient/members_readDesactivated', [$ficheControleur, 'members_readDesactivated']);
                Route::Add('/ficheClient/members_writeActivated', [$ficheControleur, 'members_writeActivated']);
                Route::Add('/ficheClient/members_writeDesactivated', [$ficheControleur, 'members_writeDesactivated']);
                Route::Add('/ficheClient/members_addActivated', [$ficheControleur, 'members_addActivated']);
                Route::Add('/ficheClient/members_addDesactivated', [$ficheControleur, 'members_addDesactivated']);
                Route::Add('/ficheClient/members_product_addActivated', [$ficheControleur, 'members_product_addActivated']);
                Route::Add('/ficheClient/members_product_addDesactivated', [$ficheControleur, 'members_product_addDesactivated']);
                Route::Add('/ficheClient/members_payment_schedule_readActivated', [$ficheControleur, 'members_payment_schedule_readActivated']);
                Route::Add('/ficheClient/members_payment_schedule_readDesactivated', [$ficheControleur, 'members_payment_schedule_readDesactivated']);
                Route::Add('/ficheClient/members_statistiques_readActivated', [$ficheControleur, 'members_statistiques_readActivated']);
                Route::Add('/ficheClient/members_statistiques_readDesactivated', [$ficheControleur, 'members_statistiques_readDesactivated']);
                Route::Add('/ficheClient/members_subscription_readActivated', [$ficheControleur, 'members_subscription_readActivated']);
                Route::Add('/ficheClient/members_subscription_readDesactivated', [$ficheControleur, 'members_subscription_readDesactivated']);
                Route::Add('/ficheClient/payment_schedule_readActivated', [$ficheControleur, 'payment_schedule_readActivated']);
                Route::Add('/ficheClient/payment_schedule_readDesactivated', [$ficheControleur, 'payment_schedule_readDesactivated']);
                Route::Add('/ficheClient/payment_schedule_writeActivated', [$ficheControleur, 'payment_schedule_writeActivated']);
                Route::Add('/ficheClient/payment_schedule_writeDesactivated', [$ficheControleur, 'payment_schedule_writeDesactivated']);
                Route::Add('/ficheClient/payment_day_readActivated', [$ficheControleur, 'payment_day_readActivated']);
                Route::Add('/ficheClient/payment_day_readDesactivated', [$ficheControleur, 'payment_day_readDesactivated']);
            }
            
        }
    }
}

