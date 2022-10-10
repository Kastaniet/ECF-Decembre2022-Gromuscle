<body>
	<div class="login-logo text-center mt-5 mb-3">
		<img src="public/img/logo_muscle.png" style="width:150px; height:100px">
	</div>
	<div class="container col-8 col-sm-8 col-md-5 col-lg-5 col-xl-4 col-xxl-4">
		<div class="login-form-logo text-center">
			<h2>S'inscrire</h2>
		</div>
		<form class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto p-5 login-form" method="POST" action="">
			<div class="form-group mt-1">
				<input type="text" class="form-control box-input mb-4" name="firstname" placeholder="Prénom" required>
			</div>
			<div class="form-group mt-1">
				<input type="text" class="form-control box-input mb-4" name="lastname" placeholder="Nom" required>
			</div>
			<div class="form-group mt-1">
				<input type="email" class="form-control email-input mb-4" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder="Adresse email">
			</div>
			<div class="form-group">
				<input type="password" class="form-control password-input mb-4" id="InputPassword" name="password" placeholder="Mot de passe">
			</div>
			<div class="row">
				<div class="col text-center">
					<button type="submit" class="btn-connexion col-md-4 col-lg-4 mt-4 mb-2" id="RegisterButton">Enregistrer</button>
					<p class="box-register">Déjà inscrit? <a href="/API_test/login">Connectez-vous ici</a></p>
				</div>
			</div>
		</form>
	</div>

	<!-- set up the modal to start hidden and fade in and out -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- dialog body -->
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3>Vous êtes inscrit avec succès.</h3>
					<a href='/API_test/login'>Cliquez ici pour vous connecter</a>
				</div>
				<!-- dialog buttons -->
				<div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
			</div>
		</div>
	</div>
</body>
