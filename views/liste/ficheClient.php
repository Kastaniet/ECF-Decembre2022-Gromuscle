<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10 justify-content-start">
            <div class="card mb-3 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <img src="public/img/salle-de-sport2.jpeg" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $leClient->getNom() ?></h5>
                            <p class="card-text">
                                <?php $adresses = $leClient->lesAdresses();
                                if (sizeof($adresses) > 0) {
                                    foreach ($adresses as $a) { ?>
                            <p class="card-text"><?= $a->toString() ?></p>
                        <?php }
                                } else { ?> <div>Pas d'adresse connue</div> <?php } ?></p>
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
        <div class="d-flex flex-column col-10 m-2">
            <?php
            foreach ($leClient->lesProduits() as $produit) { ?>
                <div class="card mb-3 col-10">
                    <div class="row-flex justify-content-center">
                        <p class="card-text"><?= $produit->getId() ?></p>
                        <p class="card-text d-flex flex-column m-2 ">
                            <label class="switch"> Members_read
                                <?php $id = $produit->getId();
                                if ($produit->getmembers_read() == 1) {
                                    echo "<a href='./ficheClient/members_readActivated?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./ficheClient/members_readDectivated?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_write
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                            <label class="switch"> Members_add
                                <?php $id = $leClient->getId();
                                if ($leClient->getActive() == 1) {
                                    echo "<a href='./client/desactive?id={$id}' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                } else {
                                    echo "<a href='./client/active?id={$id}' ><input type='checkbox' name='switch' id='myCheck'>";
                                }
                                ?>
                                <span class='slider round'></span>
                                </a>
                            </label>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script class="text/javascript">
    let togg1 = document.getElementById("togg1");
    let d1 = document.getElementById("d1");
    togg1.addEventListener("click", () => {
        if (getComputedStyle(d1).display === "none") {
            d1.style.display = "block";
        } else {
            d1.style.display = "none";
        }
    })
</script>