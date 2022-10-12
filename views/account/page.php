<?php

use utils\Gravatar;
use utils\SessionHelpers;

$account = SessionHelpers::getConnected();
?>
<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body text-center">
                <img class="m-5" src="<?= Gravatar::get_gravatar($account['email']) ?>"/>
                <h3 class="text-center pb-5">Bienvenue « <?= $users->firstname . ' ' . $users->lastname ?> »</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo labore libero neque perferendis praesentium quae. Accusamus ad aperiam architecto cumque eligendi enim facilis illo, incidunt nemo quae quia quo voluptate?</p>
            </div>
        </div>
    </div>
</div>


