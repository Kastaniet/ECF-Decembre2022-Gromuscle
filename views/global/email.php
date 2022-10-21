<div class="container-fluid">
    <div class="row col-12 justify-content-center pt-4">
        <div class="card mb-3 col-8">
            <div class="row g-0 justify-content-center">
                <div class="col-md-8">
                    <div class="card-header text-center">
                        <h5 class="fs-2"><?= $email->email()[0]->getSujet(); ?></h5>
                    </div>
                    <div class="card-body m-2">
                        <p class="card-text"><?= $email->email()[0]->getContenu(); ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <a class="btn btn-connexion col-5 m-2" href="/API_test/client">
                    Retourner aux clients
                </a>
            </div>

        </div>
    </div>