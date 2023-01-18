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


<script type="text/javascript" src="../assets/js/script-client.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form class="form">
	 	<h2>Enregistrer un client</h2>
	 	<div class="input-block">
	 		<input type="text" name="nom" id="nom" placeholder="nom du client">
	 		<input type="number" name="numero" id="numero" placeholder="numero de telephone">
	 	</div>
	 	<div class="input-block">
	 		<input type="text" name="adress" id="adress" placeholder="lieu de residence">
	 		<select name="statut" id="statut" title="choisisez son statut">
	 			<option value="regulier"> regulier </option>
	 			<option value="irregulier">irregulier</option>
	 			<option value="favorie">favorie</option>
	 		</select>
	 	</div>
	 	<div class="">
	 		<textarea placeholder="commentaire sur le client" id="commentaire"></textarea>
	 	</div>
	 	<div class="input-bouton">
	 		<button class="" id="submit"> Enregistrer</button>
	 	</div>

	 </form>

	<div class="notification" style="background-color: #000;">
		🍉🎉Compte creer avec success🎉
	</div>
	
<script src="../assets/js/jquery-3.6.0.js" ></script>

</body>
</html>