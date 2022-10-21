<?php
namespace controllers;

use controllers\base\WebController;
use models\EmailModele;
use utils\Template;

class EmailController extends WebController
{
    protected EmailModele $emailController;

    public function email()
    {
        $emailModele = new EmailModele();
        return Template::render("views/global/email.php", ["email" => $emailModele]);
    }
}