<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.foot {
			background-color: rgb(247, 182, 5);
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil</title>
	<?php require_once('views/style.php'); ?>
	<link rel="stylesheet" href="assets/css/sainte.css">
</head>

<body class="home">
	<nav class="navbar navbar-expand-lg navbar-dark foot d-flex" aria-label="Tenth navbar example">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
				aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
				<ul class="navbar-nav ml-10 mr-10" style="margin:10px;">
					<li class="nav-item">
						<a class="nav-link active " aria-current="page" href="index.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active " aria-current="page" href="about.php">A propos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active " aria-current="page" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active " aria-current="page" href="horaire.php">Horaire</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown"
							aria-expanded="false">Se Connecter</a>
						<ul class="dropdown-menu lesclasses" aria-labelledby="dropdown10">
							<li value="">
								<a class="anavbar" class="dropdown-item" href="#">Administrateur</a>
							</li>
							<li value="">
								<a class="anavbar" class="dropdown-item" href="#">Enseignant</a>
							</li>
							<li value="">
								<a class="anavbar" class="dropdown-item" href="#">Eleve</a>
							</li>
							<li value="">
								<a class="anavbar" class="dropdown-item" href="#">Parents</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Intro -->
	<div class=" example">
		<div class="row intro">
			<h1>Bienvenu à Sainte Croix</h1>
			<p class="tagline">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis,
				mollitia quae a commodi dolores necessitatibus blanditiis corporis
			</p>
			<p>
				<a class="btn btn-warning btn-rounded bi bi-eye" href="#" role="button"> Lire Plus</a>
			</p>
		</div>
		<div class="container">
			<div class="row">
				<h3 class="text-center">News</h3>
				<div class="col-lg-4 mb-3">
					<div class="card">
						<div class="card-body">
							<h3 class="text-center">La rentree</h3>
						</div>
						<div class="">
							<h5 class="card-title">Administrateur</h5>
							<p class="lead">
								Cliquer sur <b>"Se Connecter"</b> puis remplissez le formulaire.
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-warning bi bi-lock-fill"> Se Connecter</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h3 class="text-center">Connexion</h3>
						</div>
						<div class="">
							<h5 class="card-title">Enseignant</h5>
							<p class="lead">
								Cliquer sur <b>"Se Connecter"</b> puis remplissez le formulaire.
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-warning bi bi-lock-fill"> Se Connecter</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h3 class="text-center">Connexion</h3>
						</div>
						<div class="">
							<h5 class="card-title">Eleve</h5>
							<p class="lead">
								Cliquer sur <b>"Se Connecter"</b> puis remplissez le formulaire.
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-warning bi bi-lock-fill"> Se Connecter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	</div>
	</div>

	</div>


	<div class="container text-center">
		<br> <br>
		<h2 class="thin">News</h2>
		<p class="text-muted">
			The difference between involvement and commitment
			is like an eggs-and-ham breakfast:<br>
			the chicken was involved; the pig was committed.
		</p>

	</div>
	<?php
	include('views/footer.php');
	?>
	<?php require_once('views/script.php') ?>
</body>

</html>