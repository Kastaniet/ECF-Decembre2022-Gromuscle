<?php
namespace models\classes;

use models\AdresseModel;
use models\ProduitsModele;

class Client
{
    private string $id;
    private string $nom ;
    private string $email;
    private string $short_desciption;
    private string $full_description;
    private string $logo_url;
    private string $url;
    private string $dpo;
    private string $technical_contact;
    private string $commercial_contact;
    private ProduitsModele $produitModele;
    private AdresseModel $adresseModele;

    function __construct()
    {
        $this->produitModele = new ProduitsModele();
        $this->adresseModele = new AdresseModel();
    }

    /**
     * Retourne la liste des adresses du client
     * @return Adresse[]
     */
    public function lesAdresses(): array {
        return $this->adresseModele->lesAdressesClient($this->id);
    }

    /**
     * Retourne la liste des produits du client
     * @return Produit[]
     */
    public function lesProduits(): array
    {
        return $this->produitModele->lesProduitsClient($this->id);
    }

    /**
     * Affichage des informations de base du client
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->id, $this->nom, $this->prenom]));
    }

    /**
     * Affichage des informations de contact d'un client.
     * @return string
     */
    public function contactInfo(): string
    {
        return join(",", array_filter([$this->email, $this->telephone]));
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
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getActive(): string
    {
        return $this->active;
    }

    /**
     * @param string $active
     */
    public function setActive(string $active): void
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getShort_desciption(): string
    {
        return $this->short_desciption;
    }

    /**
     * @param string $short_desciption
     */
    public function setShort_desciption(string $short_desciption): void
    {
        $this->short_desciption = $short_desciption;
    }

    /**
     * @return string
     */
    public function getFull_description(): string
    {
        return $this->full_description;
    }

    /**
     * @param string $full_description
     */
    public function setFull_description(string $full_description): void
    {
        $this->full_description = $full_description;
    }

    /**
     * @return string
     */
    public function getLogo_url(): string
    {
        return $this->logo_url;
    }

    /**
     * @param string $logo_url
     */
    public function setLogo_url(string $logo_url): void
    {
        $this->logo_url = $logo_url;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getDpo(): string
    {
        return $this->dpo;
    }

    /**
     * @param string $dpo
     */
    public function setDpo(string $dpo): void
    {
        $this->dpo = $dpo;
    }

    /**
     * @return string
     */
    public function getTechnical_contact(): string
    {
        return $this->technical_contact;
    }

    /**
     * @param string $technical_contact
     */
    public function setTechnical_contact(string $technical_contact): void
    {
        $this->technical_contact = $technical_contact;
    }

    /**
     * @return string
     */
    public function getCommercial_contact(): string
    {
        return $this->commercial_contact;
    }

    /**
     * @param string $commercial_contact
     */
    public function setCommercial_contact(string $commercial_contact): void
    {
        $this->commercial_contact = $commercial_contact;
    }

}