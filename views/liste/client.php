<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10">
            <form class="form-inline d-flex col-5 m-2 mx-4">
                <input class="form-control mr-sm-2 table-filter" type="search" placeholder="Chercher une structure..." data-table="order-table" aria-label="Search" id="client-selector">
            </form>
        </div>
    </div>

    <div class="row col-12 justify-content-center pt-4">
        <div class="d-flex col-10">
            <div class="col-12 rounded">
                <table class="card table tableplus table-hover text-center mt-3 order-table col-10" id="myTable">
                    <thead>
                        <tr class="row col-12">
                            <th class="text-end m-2">Ajouter</th>
                        </tr>
                    </thead>
                    <tbody class="m-2 p-2" id="card-body">
                        <?php
                        /** @var Client[] $clients */
                        foreach ($clients as $c) { ?>
                            <tr class="card row-flex g-0 col-12">
                                <div class="col-md-4">
                                    <td class="card col-2 m-2">
                                        <img src="public/img/salle-de-sport.jpeg" class=" rounded-start" alt="..." style="width: 18rem;">
                                    </td>
                                </div>
                                <div class="col-md-8 text-nowrap">
                                    <td class="card-text col-1"><?= $c->getId(); ?></td>
                                    <td class="card-text col-2"><?= $c->getNom() . ' ' . $c->getPrenom(); ?></td>
                                    <td class="card-text col-2"><?= $c->getEmail() ?></td>
                                    <?php $adresses = $c->lesAdresses();
                                    if (sizeof($adresses) > 0) {
                                        foreach ($adresses as $a) { ?>
                                            <td class="card-text col-4"><?= $a->toString() ?></td>
                                        <?php }
                                    } else { ?> <td>Pas d'adresse connue</td> <?php } ?>
                                    <td class="card-text col-1"><a href="/API_test/client/<?= $c->getId(); ?>">></a></td>
                                </div>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row col-12 justify-content-center pt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
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
    (function() {
        'use strict';

        var TableFilter = (function() {
            var Arr = Array.prototype;
            var input;

            function onInputEvent(e) {
                input = e.target;
                var table1 = document.getElementsByClassName(input.getAttribute('data-table'));
                Arr.forEach.call(table1, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                        Arr.forEach.call(tbody.rows, filter);
                    });
                });
            }
            function filter(row) {
                var text = row.textContent.toLowerCase();
                var val = input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('table-filter');
                    Arr.forEach.call(inputs, function(input) {
                        input.oninput = onInputEvent;
                    });
                }
            };
        })();
        TableFilter.init();
    })();
</script>