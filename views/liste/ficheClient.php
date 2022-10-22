<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10 justify-content-start">
            <div class="card mb-3 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/public/img/salle-de-sport2.jpeg" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $leClient->getNom() ?></h5>
                            <p class="card-text">
                                <?php
                                $adresses = $leClient->lesAdresses();
                                if (sizeof($adresses) > 0) {
                                    foreach ($adresses as $a) { ?>
                            <p class="card-text"><?= $a->toString() ?></p>
                        <?php }
                                } else { ?> <div>Pas d'adresse connue</div> <?php } ?>
                    </p>
                    <p class="card-text"><?= $leClient->getFull_description() ?>
                    </p>
                    <p class="row col-12">
                        <?php
                        if ($leClient->getActive() == 1) {
                            echo "<button id='togg1' class='col-5 m-2'>afficher installation</button>";
                        }
                        ?>
                        <a href="/API_test/formulaire/adresse/<?= $leClient->getId() ?>" class="btn border-success btn-connexion col-5 m-2">+ Ajouter une adresse</a>
                    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-12 justify-content-center pt-4" id="d1" style="display: none;">
        <div class="d-flex flex-column col-10 m-2 ">
            <?php
            $produitList = $leClient->lesProduits();
            $produitId = $produitModele->getProduitByClientId($leClient->getId());
            $clientId_int = (int) $leClient->getId();
            if (empty($produitList)) {
                $produitModele->affecterProduit($produitId['id'], $clientId_int);
            }
            foreach ($leClient->lesProduits() as $produit) {
                $adresses = $leClient->lesAdresses();
                if (sizeof($adresses) > 0) {
                    foreach ($adresses as $a) { ?>
                        <div class="card mb-3 col-10">
                            <div class="row-flex justify-content-center">
                                <p class="card-text"><?= $a->toString() ?></p>
                                <div class="card-text row m-2 justify-content-center">
                                    <div class="d-flex flex-column col-5">
                                        <p>
                                            <label class="switch border p-1">Members_read</label>
                                            <?php if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                $id = $produit->getId();
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_readDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_readActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p class="">
                                            <label class="switch border p-1">Members_write</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_writeDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_writeActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Members_add</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_addDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_addActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Members_product_add</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_product_addDesactivated?id={$id}' class='click-off' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_product_addActivated?id={$id}' class='click-off' ><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Members_payment_schedule_read</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_payment_schedule_readDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_payment_schedule_readActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column col-5">
                                        <p>
                                            <label class="switch border p-1">Members_statistiques_read</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_statistiques_readDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_statistiques_readActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Members_subscription_read</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/members_subscription_readDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/members_subscription_readActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Payment_schedule_read</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/payment_schedule_readDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/payment_schedule_readActivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Payment_schedule_write</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/payment_schedule_writeDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/payment_schedule_writeActivated?id={$id}' class='click-off' ><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                        <p>
                                            <label class="switch border p-1">Payment_day_read</label>
                                            <?php $id = $produit->getId();
                                            if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                                                if ($produit->getmembers_read() == 1) {
                                                    echo "<a href='./ficheClient/payment_day_readDesactivated?id={$id}' class='click-off'><input type='checkbox' name='switch' id='myCheck' checked>";
                                                } else {
                                                    echo "<a href='./ficheClient/payment_day_readActivated?id={$id}' class='click-off' ><input type='checkbox' name='switch' id='myCheck'>";
                                                }
                                            }
                                            ?>
                                            <span class='slider round'></span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php }
                }
            } ?>
        </div>
    </div>
</div>

<script class="text/javascript">
    let togg1 = document.getElementById("togg1");
    let d1 = document.getElementById("d1");
    togg1.addEventListener("click", () => {
        if (getComputedStyle(d1).display === "none") {
            d1.style.display = "flex";
        } else {
            d1.style.display = "none";
        }
    })

    $('.click-off').click(function() {
        //escape here if the confirm is false;
        if (!confirm('Êtes vous sur ?')) return false;
        var btn = this;
        setTimeout(function() {
            $(btn).attr('disabled', 'disabled');
        }, 1);
        return true;
    });
</script>