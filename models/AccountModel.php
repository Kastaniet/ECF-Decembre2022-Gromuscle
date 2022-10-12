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

    public function getUsersId($email) 
    {
        $req = "SELECT * FROM users WHERE `email` = '" . $email . "'";
        $stmt = $this->getPdo()->prepare($req);
        $stmt->execute([]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    function getUsersbyId($id)
    {
        // Utilisation d'une query à la place d'un simple getOne car la requête
        // est réalisé sur un champ différent que l'ID de la table.
        $stmt = $this->getPdo()->prepare("SELECT id FROM `users` WHERE id = '" . $id. "'");
        $stmt->execute([]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
