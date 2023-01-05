<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/menue.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-client.css" media="screen" type="text/css" />

    
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form action="" method="" class="form">
	 	<h2>Effectuer un Depot </h2>
	 	<div class="input-block">
	 		<input type="text" name="style" placeholder="Style du vertement">
	 		<input type="text" name="marque" placeholder="Marque">
	 	</div>
	 	<div class="input-block">
	 		<input type="text" name="couleur" placeholder="couleur">
	 		<input type="text" name="qualite" placeholder="qualité du textile">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="quantite" placeholder="Quantité">
	 		<input type="text" name="anormalie" placeholder="Anormalie">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="prix" placeholder="Prix Unitaire">
	 		<input type="number" name="prixT" placeholder="Prix Total" readonly>
	 	</div>
	 	<div class="">
	 		<textarea placeholder="description du vertement"></textarea>
	 	</div>
	 	<div class="input-bouton">
	 		<button class=""> Enregistrer</button>
	 	</div>

	 </form>

</body>
</html>