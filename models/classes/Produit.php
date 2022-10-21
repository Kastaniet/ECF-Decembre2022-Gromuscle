<?php

namespace models\classes;

use models\ProduitsModele;

class Produit
{
    private string $id;
    private string $client_id;
    private int $members_read;
    private int $members_write;
    private int $members_add;
    private int $members_product_add;
    private int $members_payment_schedule_read;
    private int $members_statistiques_read;
    private int $members_subscription_read;
    private int $payment_schedule_read;
    private int $payment_schedule_write;
    private int $payment_day_read;


    private ProduitsModele $produitModele;

    public function __construct()
    {
        $this->produitModele = new ProduitsModele();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getClient_id(): string
    {
        return $this->client_id;
    }

    /**
     * @param string $client_id
     */
    public function setClient_id(string $client_id): void
    {
        $this->client_id = $client_id;
    }

    /**
     * @return string
     */
    public function getMembers_read(): string
    {
        return $this->members_read;
    }

    /**
     * @param string $members_write
     */
    public function setMembers_read(string $members_read): void
    {
        $this->members_read = $members_read;
    }

    /**
     * @return string
     */
    public function getMembers_write(): string
    {
        return $this->members_write;
    }

    /**
     * @param string $members_add
     */
    public function setMembers_write(string $members_write): void
    {
        $this->members_write = $members_write;
    }

    /**
     * @return string
     */
    public function getMembers_add(): string
    {
        return $this->members_add;
    }

    /**
     * @param string $members_add
     */
    public function setMembers_add(string $members_add): void
    {
        $this->members_add = $members_add;
    }

    /**
     * @return string
     */
    public function getMembers_product_add(): string
    {
        return $this->members_product_add;
    }

    /**
     * @param string $members_product_add
     */
    public function setMembers_product_add(string $members_product_add): void
    {
        $this->members_product_add = $members_product_add;
    }

    /**
     * @return string
     */
    public function getMembers_payment_schedule_read(): string
    {
        return $this->members_payment_schedule_read;
    }

    /**
     * @param string $members_payment_schedule_read
     */
    public function setMembers_payment_schedule_read(string $members_payment_schedule_read): void
    {
        $this->members_payment_schedule_read = $members_payment_schedule_read;
    }

    /**
     * @return string
     */
    public function getMembers_statistiques_read(): string
    {
        return $this->members_statistiques_read;
    }

    /**
     * @param string $members_statistiques_read
     */
    public function setMembers_statistiques_read(string $members_statistiques_read): void
    {
        $this->members_statistiques_read = $members_statistiques_read;
    }

    /**
     * @return string
     */
    public function getMembers_subscription_read(): string
    {
        return $this->members_subscription_read;
    }

    /**
     * @param string $members_subscription_read
     */
    public function setMembers_subscription_read(string $members_subscription_read): void
    {
        $this->members_subscription_read = $members_subscription_read;
    }

    /**
     * @return string
     */
    public function getPayment_schedule_read(): string
    {
        return $this->payment_schedule_read;
    }

    /**
     * @param string $payment_schedule_read
     */
    public function setPayment_schedule_read(string $payment_schedule_read): void
    {
        $this->payment_schedule_read = $payment_schedule_read;
    }

    /**
     * @return string
     */
    public function getPayment_schedule_write(): string
    {
        return $this->payment_schedule_write;
    }

    /**
     * @param string $payment_schedule_write
     */
    public function setPayment_schedule_write(string $payment_schedule_write): void
    {
        $this->payment_schedule_write = $payment_schedule_write;
    }

    /**
     * @return string
     */
    public function getPayment_day_read(): string
    {
        return $this->payment_day_read;
    }

    /**
     * @param string $payment_day_read
     */
    public function setPayment_day_read(string $payment_day_read): void
    {
        $this->payment_day_read = $payment_day_read;
    }

}