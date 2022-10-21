<?php

namespace models;

use models\base\SQL;
use models\classes\Client;
use models\classes\Produit;


class ProduitsModele extends SQL
{
    public function __construct()
    {
        parent::__construct('produit', 'id');
    }

    /**
     * Liste les produits d'un client donné
     * @param string $clientId
     * @return Produit[]
     */
    public function lesProduitsClient(string $clientId): array
    {
        $query = "SELECT produit.* FROM produit INNER JOIN installation ON installation.idProduit = produit.id INNER JOIN client ON client.id = installation.idClient WHERE idClient = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$clientId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Produit::class);
    }

    /**
     * Retourne la liste des clients ayant commandé le produit $produitId
     * @param string $produitId
     * @return Client[]
     */
    public function lesClientProduits(string $produitId): array{
        $query = "SELECT client.* FROM produit INNER JOIN installation ON installation.idProduit = produit.id INNER JOIN client ON client.id = installation.idClient WHERE idProduit = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$produitId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Client::class);
    }

    /**
     * Affecte un produit à un client.
     * @param int $idProduit
     * @param int $idClient
     * @return void
     */
    public function affecterProduit(int $idProduit, int $idClient){
        $query = "INSERT INTO commander(idProduit, idClient) VALUE (?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$idClient, $idProduit]);
    }

    function members_readActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_read = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_readDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_read = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_writeActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_write = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_writeDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_write = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_addActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_add = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_addDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_add = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_product_addActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_product_add = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_product_addDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_product_add = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_payment_schedule_readActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_payment_schedule_read = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_payment_schedule_readDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_payment_schedule_read = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_statistiques_readActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_statistiques_read = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_statistiques_readDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_statistiques_read = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_subscription_readActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_subscription_read = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function members_subscription_readDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET members_subscription_read = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function payment_schedule_readActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET payment_schedule_read = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function payment_schedule_readDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET payment_schedule_read = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function payment_schedule_writeActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET payment_schedule_write = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function payment_schedule_writeDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET payment_schedule_write = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function payment_day_readActivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET payment_day_read = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function payment_day_readDesactivated($id)
    {
        $stmt = $this->getPdo()->prepare("UPDATE `produit` SET payment_day_read = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }


}