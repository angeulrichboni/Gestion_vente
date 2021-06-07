<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>

<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title>Gestion Vente</title>


	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/app.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Accueil</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link" href="">Connexion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" disabled href="">Inscription</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><br>
	<div class="container pt-5">
		<?php if (isset($_SESSION['flash'])) :; ?>
			<?php foreach ($_SESSION['flash'] as $type => $message) :; ?>
				<div class="alert alert-<?= $type; ?>">
					<?= $message; ?>
				</div>
			<?php endforeach; ?>
			<?php unset($_SESSION['flash']); ?>
		<?php endif; ?>