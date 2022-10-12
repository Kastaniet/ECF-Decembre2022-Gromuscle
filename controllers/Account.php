<?php


namespace controllers;


use controllers\base\WebController;
use models\AccountModel;
use utils\SessionHelpers;
use utils\Template;

class Account extends WebController
{
    protected AccountModel $account;

    public function __construct()
    {
        $this->account = new AccountModel();
    }

    function login(): string
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if ($this->account->login($_POST["email"], $_POST["password"])) {

                $user = $this->account->getUsersId($_POST["email"]);
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $user['id'];
                $id = $user['id'];
                $this->redirect("liste/$id");
            }
        }

        return Template::render("views/account/login.php", array());
    }

    function register(): string
    {

        $conn = mysqli_connect('localhost', 'root', '', 'gromuscle');
        if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
            // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
            $firstname = stripslashes($_POST['firstname']);
            $firstname = mysqli_real_escape_string($conn, $firstname);
            $lastname = stripslashes($_POST['lastname']);
            $lastname = mysqli_real_escape_string($conn, $lastname);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $email = stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($conn, $email);

            // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            if (good_email_service($email) && mdpCorrecte($password)) {
                //requéte SQL + mot de passe crypté
                $query = "INSERT into `users` (firstname, lastname, email, password)
              VALUES ('$firstname','$lastname', '$email', '" . hash('sha256', $password) . "')";
                // Exécute la requête sur la base de données
                $res = mysqli_query($conn, $query);
                if ($res) {
                    echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='/API_test/login'>connecter</a></p>
			 </div>";
                }
            } else {
                echo "<div>Mot de passe ou email invalide. Veuillez rentrer un mail valide et un mot de passe entre 6 et 20 caractères.<div>";
            }
        }

        return Template::render("views/account/register.php", array());
    }

    function logout()
    {
        SessionHelpers::logout();
        $this->redirect("/API_test/login");
    }

    function page($id): string
    {
        $users = $this->account->getOne($id);
        return Template::render("views/account/page.php", array('users' => $users));
    }
}
