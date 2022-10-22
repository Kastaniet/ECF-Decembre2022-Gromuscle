<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gromuscle</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/style/main.css">
</head>

<body class="<?= isset($_SESSION['id']) ? 'brick' : ''  ?>">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <?php
            if (isset($_GET['path'])) {
                echo '<a class="navbar-brand" href="/API_test">← Retour</a>';
            } else {
                echo '<a class="navbar-brand" href="/API_test">Gromuscle</a>';
            }
            ?>
            <ul class="nav nav-pills">
                <?php 
                if (\utils\SessionHelpers::isLogin()) {
                    
                    echo '<li class="nav-item"><a href="/API_test/page/' . $_SESSION['id'] . '" class="nav-link">Mon compte</a></li>';
                    if ($_SESSION['user']['roles'] == 'admin' || $_SESSION['user']['roles'] == 'technicien') {
                    echo '<li class="nav-item"><a href="/API_test/client" class="nav-link">Clients</a></li>';
                    echo '<li class="nav-item"><a href="/API_test/email" class="nav-link">E-mail</a></li>';
                    echo '<li class="nav-item"><a href="/API_test/logout" class="nav-link">Déconnexion</a></li>';
                }
                    
                } else {
                    echo '<li class="nav-item"><a href="/API_test/login" class="nav-link">Connexion</a></li>';
                    echo '<li class="nav-item"><a href="/API_test/about" class="nav-link">À propos</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>