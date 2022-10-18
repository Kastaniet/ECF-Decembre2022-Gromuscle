<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10 justify-content-center">
            <div class="card mb-3">
                <div class="row g-0 ">
                    <div class="col-md-4">
                        <img src="/public/img/salle-de-sport.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $leClient->getNom() . ' ' . $leClient->getPrenom(); ?></h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text col-md-4">
                                <?php
                                if ($leClient->getActive() == 1) {
                                    echo "<button id='togg1'>afficher installation</button>";
                                }
                                ?>
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