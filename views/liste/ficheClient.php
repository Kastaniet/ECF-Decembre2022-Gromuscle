<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10 justify-content-center">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="public/img/salle-de-sport2.jpeg" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $leClient->getNom() . ' ' . $leClient->getPrenom(); ?></h5>
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
                            echo "<button id='togg1' class='col-5'>afficher installation</button>";
                        }
                        ?>
                        <a href="/API_test/formulaire/adresse/<?= $leClient->getId() ?>" class="text-light btn btn-connexion col-5">+ Ajouter une adresse</a>
                    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row col-12 justify-content-center pt-4" id="d1" style="display: none;">
        <div class="d-flex col-10">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Les produits</th>
                        <?php foreach ($leClient->lesProduits() as $leProduit) { ?>
                            <td><?= $leProduit->toString(); ?></td>
                        <?php } ?>

                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
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