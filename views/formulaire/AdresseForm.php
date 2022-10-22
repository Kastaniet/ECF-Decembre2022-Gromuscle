<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10 justify-content-center">
            <form action="" method="post">
                <label for="adresse">Adresse :</label><br>
                <input type="text" id="adresse" name="adresse" value=""><br>
                <label for="postal">Code Postal:</label><br>
                <input type="text" id="postal" name="postal" value=""><br><br>
                <label for="city">Ville :</label><br>
                <input type="text" id="city" name="city" value=""><br><br>
                <input type="submit" value="Submit">
            </form>
            <?php 
            if (!empty($_POST)) {
                $adresse->setRue($_POST['adresse']);
                $adresse->setCodePostal($_POST['postal']);
                $adresse->setVille($_POST['city']);
                $adresse->setClientId(substr($_GET['path'], 19));
                $UneAdresse->creerAdresseClient($adresse);

                $text = 'Ceci est un mail test, pour voir si l\'envoie fonctionne.';
                $text = str_replace("\n.", "\n..", $text);
                $dest = $email->email()['contenus'];
                if (mail($dest, 'Nouvelle adresse', $text)) {
                    echo 'email envoyé avec succès';
                } else {
                    echo 'Echec de l\'envoie de l\'email';
                }
                $id = $adresse->getClientId();
                header("location:http://localhost/API_test/ficheClient/$id");
            }
            ?>
        </div>
    </div>
</div>