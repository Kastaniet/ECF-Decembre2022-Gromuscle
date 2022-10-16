<?php
namespace controllers;

use controllers\base\WebController;
use utils\Template;
use models\ClientsModele;
use models\classes\Client;
use routes\Cli;

class ClientController extends WebController
{
    protected ClientsModele $clientControleur;

    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    function liste($page = 0): string
    {
        $clients = $this->clientModele->liste(25, $page);
        return Template::render( "views/liste/client.php", array("page" => $page, "clients" => $clients));
    }

    function active($id = '')
    {
        if ($id != "") {
            $this->clientModele->activated($id);
        }

        $this->redirect("/API_test/client");
    }

    function desactive($id = '')
    {
        if ($id != "") {
            $this->clientModele->desactivated($id);
        }
        $this->redirect("/API_test/client");
    }

    function formClient()
    {
        $unClient = new ClientsModele;
        return Template::render("views/formulaire/clientForm.php", array("unClient" => $unClient));
        if (isset($_POST)) {
            $leClient = new Client;
            $leClient->getNom($_POST['fname']);
            $leClient->getPrenom($_POST['lname']);
            $leClient->getEmail($_POST['email']);
            $leClient->getTelephone($_POST['telephone']);
            $this->redirect("/API_test/client");
        }
    }
}