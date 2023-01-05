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
    <link rel="stylesheet" href="../assets/css/style-profile.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">

<script type="text/javascript" src="../assets/js/script-user.js" defer></script>
    
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form class="form" method="POST" id="form" enctype="multipart/form-data">
	 	<h2>Enregistrer un utilisateur</h2>
	 	<div class="input-block">
	 		<input type="text" name="nom" placeholder="nom de l'utilisateur" id="nom">
	 		<input type="text" name="prenom" placeholder="prenom" id="prenom">
	 	</div>
	 	<div class="input-block">
	 		<input type="password" name="password" id="password" placeholder="mot de pass">
	 		<input type="text" name="adress" id="adress" placeholder="lieu de residence">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="age" id="age" placeholder="age">
	 		<input type="number" name="numero" id="numero" placeholder="numero de telephone">
	 	</div>
	 	<div class="input-block">
	 		<select name="poste" id="poste" title="choisisez son poste">
	 			<option value="gerant"> gerant </option>
	 			<option value="agent">agent de ramassage et livaraison </option>
	 			<option value="administrateur">administrateur</option>
	 		</select>
	 		<select name="statut" id="statut" title="choisisez sont statut matrimonial">
	 			<option value="celibatere">Célibataire  </option>
	 			<option value="marier">Marier</option>
	 			<option value="concubin">Concubin</option>
	 		</select>
	 	</div>
	 	<div class="" style="display: flex;">
	 		<textarea placeholder="commentaire sur l'utilisateur" id="commentaire" rows="10"></textarea>
	 		<div class="upload2">
		        <div class="img">
		            <img src="../assets/images/uilisateur.png" alt="profile" id="preImg">
		            
		        </div>
		        <div class="round">
		            <input type="file" name="profile" id="profile">
		            <i class="fas fa-camera" style="color: aliceblue;"></i>
	        	</div>
    		</div>
	 	</div>
	 	<div class="input-bouton">
	 		<button class="mon-button"  id="submit" > Enregistrer</button>
	 	</div>

	 </form>

	
	
	<div class="notification" style="background-color: #000;">
		🍉🎉Compte creer avec success🎉
	</div>
	
<script src="../assets/js/jquery-3.6.0.js" ></script>
</body>
</html>