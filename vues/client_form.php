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
	 	<h2>Enregistrer un client</h2>
	 	<div class="input-block">
	 		<input type="text" name="nom" placeholder="nom du client">
	 		<input type="number" name="numero" placeholder="numero de telephone">
	 	</div>
	 	<div class="input-block">
	 		<input type="text" name="adress" placeholder="lieu de residence">
	 		<select name="statut" title="choisisez son statut">
	 			<option value="regulier"> regulier </option>
	 			<option value="irregulier">irregulier</option>
	 			<option value="favorie">favorie</option>
	 		</select>
	 	</div>
	 	<div class="">
	 		<textarea placeholder="commentaire sur le client"></textarea>
	 	</div>
	 	<div class="input-bouton">
	 		<button class=""> Enregistrer</button>
	 	</div>

	 </form>

</body>
</html>