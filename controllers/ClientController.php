<?php
namespace controllers;

use controllers\base\WebController;
use utils\Template;
use models\ClientsModele;

class ClientController extends WebController
{
    protected ClientsModele $clientControleur;

    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    function liste($page = 0): string
    {
        $recherche = $this->clientModele->recherche();
        $clients = $this->clientModele->liste(10, $page);
        return Template::render( "views/liste/client.php", array("page" => $page, "clients" => $clients, "recherche" => $recherche));
    }



}