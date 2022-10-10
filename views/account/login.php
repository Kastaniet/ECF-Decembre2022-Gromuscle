<body>
    <div class="login-logo text-center mt-5 mb-3">
        <img src="public/img/logo_muscle.png" style="width:150px; height:100px">
    </div>
    <div class="container col-8 col-sm-8 col-md-5 col-lg-5 col-xl-4 col-xxl-4">
        <div class="login-form-logo text-center">
            <h2>Connexion</h2>
        </div>
        <form class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto p-5 login-form" method="POST" action="">
            <div class="form-group mt-1">
                <input type="email" class="form-control email-input mb-4" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder="Adresse email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control password-input mb-4" id="InputPassword" name="password" placeholder="Mot de passe">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group text-center">
                        <input type="checkbox" class="form-check-input" name="stayConnect" id="stayConnect">
                        <label class="form-check-label mb-2" for="stayConnect">Rester connecter</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group text-center">
                        <a href="/API_test/register" class="forget-password" value="">Première connexion ?</a>
                    </div>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-connexion col-md-4 col-lg-4 mt-4 mb-2">Connexion</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>