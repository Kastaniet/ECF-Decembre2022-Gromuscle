<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4 mt-2">
        <div class="d-flex col-7">
            <form class="form-inline d-flex col-5 m-2 mx-4">
                <input class="form-control mr-sm-2 table-filter" type="search" placeholder="Chercher une structure..." data-table="order-table" aria-label="Search" id="client-selector">
            </form>
        </div>
        <div class="d-flex col-3 justify-content-end p-1">
            <a href="/API_test/formulaire/client" class="text-light btn btn-connexion">+ ajouter un client</a>
        </div>
    </div>

    <div class="row col-12 justify-content-center pt-4">
        <?php /** @var Client[] $clients */
        foreach ($clients as $c) { ?>
            <div class="card mb-3 card-result" style="max-width: 540px;">
                <div class="row g-0 card-item">
                    <div class="col-md-4">
                        <img src="public/img/salle-de-sport.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-header"><a href="/API_test/ficheClient/<?= $c->getId(); ?>" <?= ($c->getActive() == 0) ? 'class="disabled"' : ' ' ?>><?= $c->getNom() ?></a></div>
                        <div class="card-body">
                            <h5 class="card-title" id="idClient"><?= $c->getId(); ?></h5>
                            <p class="card-text"><?= $c->getEmail() ?></p>
                            <?php $adresses = $c->lesAdresses();
                            if (sizeof($adresses) > 0) {
                                foreach ($adresses as $a) { ?>
                                    <p class="card-text"><?= $a->toString() ?></p>
                                <?php }
                            } else { ?> <div>Pas d'adresse connue</div> <?php } ?>
                            <p class="card-text"></p>
                            <p class="card-footer">
                                <label class="switch">
                                    <?php $id = $c->getId();
                                    if ($c->getActive() == 1) {
                                        echo "<a href='./client/desactive?id={$id}' class='click-off' ><input type='checkbox' name='switch' id='myCheck' checked>";
                                    } else {
                                        echo "<a href='./client/active?id={$id}' class='click-off' ><input type='checkbox' name='switch' id='myCheck'>";
                                    }
                                    ?>
                                    <span class='slider round'></span>
                                    </a>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="row col-12 justify-content-center pt-4">
        <div class="col-10">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#"><?= $page + 1 ?></a></li>
                    <li class="page-item"><a class="page-link" href="#"><?= $page + 2 ?></a></li>
                    <li class="page-item"><a class="page-link" href="#"><?= $page + 3 ?></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script type="text/javascript">
        const searchBar = document.querySelector('#client-selector');

        searchBar.addEventListener("keyup", (e) => {
            const searchedLetters = e.target.value;
            const cards = document.querySelectorAll('.card');
            filterElements(searchedLetters, cards);
        });

        function filterElements(letters, elements) {
            if (letters.length > 1) {
                for (let i = 0; i < elements.length; i++) {
                    console.log(elements[i].textContent.toLowerCase().includes(letters));
                    if (elements[i].textContent.toLowerCase().includes(letters)) {
                        elements[i].style.display = 'block';
                    } else {
                        elements[i].style.display = 'none';
                    }
                }
            }
            if (letters === ' ') {
                elements.style.display = 'block';
            };
        }

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