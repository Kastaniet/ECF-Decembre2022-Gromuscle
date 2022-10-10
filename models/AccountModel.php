<?php
namespace models;

use models\base\SQL;
use utils\SessionHelpers;

class AccountModel extends SQL
{
    public function __construct()
    {
        parent::__construct('users', 'id');
    }

    public function login($email, $password): bool
    {
        /*
         * TODO DANS LA VRAI VIE
         * ICI NOUS APPELLERIONS LA BDD AFIN DE VÉRIFIER LE COMPTE
         */

        SessionHelpers::login(array("email" => $email, "password" => $password));
        return true;
    }
}