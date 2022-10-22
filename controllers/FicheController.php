<?php
namespace controllers;

use controllers\base\WebController;
use models\AdresseModel;
use models\EmailModele;
use models\ProduitsModele;
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
        $produitModele = new ProduitsModele();
        $leClient = $clientModele->getByClientId($id);
        $_GET['id'] = $id;

        return Template::render("views/liste/ficheClient.php", ["leClient" => $leClient, "produitModele" => $produitModele]);
    }

    public function formAdresse($clientId) {

        $clientModele = new ClientsModele();
        $leClient = $clientModele->getByClientId($clientId);
        $uneAdresse = new AdresseModel;
        $adresse = new Adresse;
        $email = new EmailModele;
        return Template::render("views/formulaire/AdresseForm.php", array("UneAdresse" => $uneAdresse, "adresse" => $adresse, "leClient" => $leClient, "email" => $email));
    }

    function members_readActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_readActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_readDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_readDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_writeActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_writeActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_writeDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_writeDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_addActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_addActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_addDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_addDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_product_addActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_product_addActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_product_addDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_product_addDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_payment_schedule_readActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_payment_schedule_readActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_payment_schedule_readDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_payment_schedule_readDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_statistiques_readActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_statistiques_readActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_statistiques_readDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_statistiques_readDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_subscription_readActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_subscription_readActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function members_subscription_readDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->members_subscription_readDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function payment_schedule_readActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->payment_schedule_readActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function payment_schedule_readDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->payment_schedule_readDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function payment_schedule_writeActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->payment_schedule_writeActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function payment_schedule_writeDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->payment_schedule_writeDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

    function payment_day_readActivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->payment_day_readActivated($id);
        }

        $this->redirect("API_test/ficheClient/{$id}");
    }

    function payment_day_readDesactivated($id = '')
    {
        if ($id != "") {
            $this->produitModele->payment_day_readDesactivated($id);
        }
        $this->redirect("API_test/ficheClient/{$id}");
    }

}