<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10 justify-content-center">

            <form action="" method="POST">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value=""><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value=""><br><br>
                <label for="email">email:</label><br>
                <input type="email" id="email" name="email" value=""><br><br>
                <label for="telephone">Telephone:</label><br>
                <input type="text" id="telephone" name="telephone" value=""><br><br>
                <input type="submit" value="Submit">
            </form>
            <?php sdisplay($UneAdresse);
            if (!empty($_POST)) {
                $leClient->setNom($_POST['lname']);
                $leClient->setPrenom($_POST['fname']);
                $leClient->setEmail($_POST['email']);
                $leClient->setTelephone($_POST['telephone']);

                $unClient->creerClient($leClient);

                $text = 'Ceci est un mail test, pour voir si l\'envoie fonctionne.';
                $text = str_replace("\n.", "\n..", $text);
                $dest = $_POST['email'];
                if (mail($dest, 'Nouvelle adresse', $text)) {
                    echo 'email envoyé avec succès';
                } else {
                    echo 'Echec de l\'envoie de l\'email';
                }

                header("location:http://localhost/API_test/client/$_GET[id]");
            }
            ?>
        </div>
    </div>
</div>