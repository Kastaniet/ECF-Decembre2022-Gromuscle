<div class="container-fluid">
    <div class="row d-flex col-12 pt-4">
        <div class="d-flex col-10 justify-content-center">
            <form action="" method="POST" class="row col-10">
                <div class=" col-3">
                    <label for="fname">Ville:</label><br>
                    <input type="text" id="nom" name="nom" value=""><br>
                    <label for="email">email:</label><br>
                    <input type="email" id="email" name="email" value=""><br><br>
                    <label for="telephone">Petite description:</label><br>
                    <input type="text" id="short_description" name="short_description" value=""><br><br>
                    <label class="active">Active :</label>
                    <input type='checkbox' name='active' id='myCheck'>
                    <span class='slider round'></span>
                </div>
                <div class="d-flex flex-column col-6 mx-2">
                    <p>
                        <label class="switch border p-1">Members_read</label>
                        <input type="checkbox" id="Members_read" name="Members_read">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p class="">
                        <label class="switch border p-1">Members_write</label>
                        <input type="checkbox" id="Members_write" name="Members_write">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Members_add</label>
                        <input type="checkbox" id="Members_add" name="Members_add">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Members_product_add</label>
                        <input type="checkbox" id="Members_product_add" name="Members_product_add">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Members_payment_schedule_read</label>
                        <input type="checkbox" id="Members_payment_schedule_read" name="Members_payment_schedule_read">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Members_statistiques_read</label>
                        <input type="checkbox" id="Members_statistiques_read" name="Members_statistiques_read">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Members_subscription_read</label>
                        <input type="checkbox" id="Members_subscription_read" name="Members_subscription_read">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Payment_schedule_read</label>
                        <input type="checkbox" id="Payment_schedule_read" name="Payment_schedule_read">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Payment_schedule_write</label>
                        <input type="checkbox" id="Payment_schedule_write" name="Payment_schedule_write">
                        <span class='slider round'></span>
                        </a>
                    </p>
                    <p>
                        <label class="switch border p-1">Payment_day_read</label>
                        <input type="checkbox" id="Payment_day_read" name="Payment_day_read">
                        <span class='slider round'></span>
                        </a>
                    </p>
                </div>
                <input type="submit" value="Submit" class="col-3">
            </form>

            <?php
            if (!empty($_POST)) {
                $leClient->setNom($_POST['nom']);
                $leClient->setEmail($_POST['email']);
                $unProduit->setMembers_read(0);
                $unProduit->setMembers_write(0);
                $unProduit->setMembers_add(0);
                $unProduit->setMembers_product_add(0);
                $unProduit->setMembers_payment_schedule_read(0);
                $unProduit->setMembers_statistiques_read(0);
                $unProduit->setMembers_subscription_read(0);
                $unProduit->setPayment_schedule_read(0);
                $unProduit->setPayment_schedule_write(0);
                $unProduit->setPayment_day_read(0);
                if (isset($_POST['active'])){
                    $leClient->setActive(1);
                }
                    
                elseif (isset($_POST['Members_read'])){
                $unProduit->setMembers_read(1);
                } elseif (isset($_POST['Members_write'])) {
                $unProduit->setMembers_write(1);
                } elseif (isset($_POST['Members_add'])) {
                $unProduit->setMembers_add(1);
                } elseif (isset($_POST['Members_product_add'])){
                    $unProduit->setMembers_product_add(1);
                } elseif (isset($_POST['Members_payment_schedule_read'])) {
                    $unProduit->setMembers_payment_schedule_read(1);
                } elseif (isset($_POST['Members_statistiques_read'])) {
                    $unProduit->setMembers_statistiques_read(1);
                } elseif (isset($_POST['Members_subscription_read'])) {
                    $unProduit->setMembers_subscription_read(1);
                } elseif (isset($_POST['Payment_schedule_read'])) {
                    $unProduit->setPayment_schedule_read(1);
                } elseif (isset($_POST['Payment_schedule_write'])) {
                    $unProduit->setPayment_schedule_write(1);
                } elseif (isset($_POST['Payment_day_read'])) {
                    $unProduit->setPayment_day_read(1);
                } 
                        

                $unClient->creerClient($leClient);
                $idClient = $unClient->getByClientEmail($_POST['email'])['id'];
                $unProduit->setClient_id($idClient);
                $leProduit->creerProduit($unProduit);
                $idProduit = $leProduit->getProduitByClientId($idClient);
                $leProduit->affecterProduit($idProduit['id'], $idClient);

                $sujet = $email->email()[0]->getSujet();
                $text = $email->email()[0]->getContenu();

                $text = str_replace("\n.", "\n..", $text);
                $dest = $_POST['email'];
                if (mail($dest, $sujet, $text)) {
                    echo 'email envoyé avec succès';
                } else {
                    echo 'Echec de l\'envoie de l\'email';
                }
                header("location:http://localhost/API_test/client");
            }
            ?>
        </div>
    </div>
</div>