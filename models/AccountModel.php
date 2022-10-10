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

    public function getAllUsers()
    {
        return $this->getAll();
    }

    public function getId()
    {
        $stmt = $this->getPdo()->prepare("SELECT 'id' FROM users");
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function getOneUser($id) 
    {
        return $this->getOne($id);
    }

    function getUsersbyId($id)
    {
        // Utilisation d'une query à la place d'un simple getOne car la requête
        // est réalisé sur un champ différent que l'ID de la table.

        $stmt = $this->getPdo()->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}
