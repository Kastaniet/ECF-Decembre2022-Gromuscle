<?php

namespace models;

use models\base\SQL;
use models\classes\Client;

class ClientsModele extends SQL
{
    public function __construct()
    {
        parent::__construct('client', 'id');
    }

    /**
     * Liste les clients présents en base de données
     * @param int $limit
     * @param int $page
     * @return Client[]
     */
    public function liste(int $limit = PHP_INT_MAX, int $page = 0): array
    {
        $query = "SELECT * FROM client LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([":limit" => $limit * $page, ":offset" => $limit]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Client::class);
    }

    /**
     * Retourne une liste de client correspondant au critère de recherche
     * @param string $keyword
     * @param int $limit
     * @param int $page
     * @return Client[]
     */
    public function recherche(string $keyword = "", int $limit = PHP_INT_MAX, int $page = 0): array
    {
        $query = "SELECT * FROM client WHERE nom LIKE :nom OR prenom like :prenom OR email like :email LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([
            ":nom" => "%$keyword%",
            ":prenom" => "%$keyword%",
            ":email" => "%$keyword%",
            ":limit" => $limit * $page,
            ":offset" => $limit
        ]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Client::class);
    }

    /**
     * Ajoute un nouveau client en base de données
     * @param Client $unClient
     * @return bool|string
     */
    public function creerClient(Client $unClient): bool|string
    {
        $query = "INSERT INTO client ( nom, email, active) VALUES (?, ?, 1)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$unClient->getNom(), $unClient->getEmail()]);
        return $this->getPdo()->lastInsertId();
    }

    public function getByClientEmail($email)
    {
        $req = "SELECT * FROM client WHERE `email` = '" . $email . "'";
        $stmt = $this->getPdo()->prepare($req);
        $stmt->execute([]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getByClientId($clientId) {
        $query = "SELECT * FROM client WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$clientId]);
        return $stmt->fetchObject(Client::class);
    }

    function activated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `client` SET active = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function desactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `client` SET active = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

}