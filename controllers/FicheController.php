<?php
namespace controllers;

use controllers\base\WebController;
use models\AdresseModel;
use utils\Template;
use models\classes\Adresse;
use models\ClientsModele;

class FicheController extends WebController
{
    protected ClientsModele $clientModele;

    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    public function fiche($id="")
    {
        $clientModele = new ClientsModele();
        $leClient = $clientModele->getByClientId($id);
        $_GET['id'] = $id;
        return Template::render("views/liste/ficheClient.php", ["leClient" => $leClient]);
    }

    public function formAdresse($id = "") {

        $clientModele = new ClientsModele();
        $leClient = $clientModele->getByClientId($id);
        $_GET['id'] = $id;
        $uneAdresse = new AdresseModel;
        $adresse = new Adresse;

        return Template::render("views/formulaire/AdresseForm.php", array("UneAdresse" => $uneAdresse, "adresse" => $adresse, "leClient" => $leClient));
    }
}