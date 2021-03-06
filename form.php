<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/global_style.css">
    <link rel="stylesheet" type="text/css" href="css/form_style.css">
	<link rel="icon" type="image/png" href="img/thomaspesquet.png">
	<script src="https://kit.fontawesome.com/798abe29a3.js" crossorigin="anonymous"></script>
	<title>Formulaire d'ajout</title>
</head>
<body>
	<?php include('include/header.php');?>
	<main>
		<h1 class="font-default">Formulaire d'ajout d'information</h1>
		<form action="formRecu.php" method="post">
			<div class="form-line">
				<label for="nom" class="label-form">Nom</label>
				<input type="text" name="nom" id="nom" class="input-form" autofocus>
			</div>
			<div class="form-line">
				<label for="prenom" class="label-form">Prénom</label>
				<input type="text" name="prenom" id="prenom" class="input-form">
			</div>
			<div class="form-line">
				<label for="estSauveteur" class="label-form">Sauveteur ? <span class="form-little-note">(si non coché, alors sauvé)</span></label>
				<input type="checkbox" name="estSauveteur" id="estSauveteur" class="checkbox-form" value="VRAI"> 
			</div>
			<div class="form-line">
				<label for="date" class="label-form">Date</label>
				<input type="date" name="date" id="date" class="input-form">
			</div>
			<div class="form-line">
				<label for="bateau" class="label-form">Bateau</label>
				<input type="text" name="bateau" id="bateau" class="input-form">
			</div>
			<div class="form-column">
				<label for="informations" class="label-form">Informations complémentaires</label>
				<textarea name="informations" id="informations" class="text-area-form"></textarea>
			</div>
			<div class="submit-div">
				<label for="submit-new" class="submit-btn clickable font-default"><span class="submit-text">Envoyer</span><i class="fas fa-rocket"></i></label>
				<input type="submit" id="submit-new" class="display-none">
			</div>
		</form>
	</main>
	<?php include('include/footer.php')?>
</body>
</html>

