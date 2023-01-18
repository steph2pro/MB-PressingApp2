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

    
<script type="text/javascript" src="../assets/js/script-depot.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form action="" method="" class="form">
	 	<h2>Effectuer un Depot </h2>
	 	<div class="input-block">
	 		<input type="text" name="style" id="style" placeholder="Style du vertement">
	 		<input type="text" name="marque" id="marque" placeholder="Marque">
	 	</div>
	 	<div class="input-block">
	 		<input type="text" name="couleur" id="couleur" placeholder="couleur">
	 		<input type="text" name="qualite" id="qualite" placeholder="qualité du textile">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="quantite" id="quantite" placeholder="Quantité">
	 		<input type="text" name="anormalie" id="anormalie" placeholder="Anormalie">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="prix" id="prix" placeholder="Prix Unitaire">
	 		<select name="proprietaire" id="proprietaire" title="selectionez le nom du client">
	 			<?php
                  require '../modeles/conf.php';
                  $sql="select * from clients order by id desc";
                  $req=$db->prepare($sql);
                  $req->execute();
                  $resultats=$req->fetchAll(PDO::FETCH_OBJ);
                 
                  foreach ($resultats as $resultat):
                  
                  ?>
                  <option value="<?= $resultat->nom ?>"><?= $resultat->nom ?></option>
                    
                  <?php 
                    endforeach;

                  ?>
	 		</select>
	 	</div>
	 	
	 	<div class="" style="display: flex;">
	 		<textarea placeholder="description du vertement" id="description" rows="10" style="width: 50%"></textarea>
	 		<div class="upload2">
		        <div class="img">
		            <img src="../assets/images/vertement.png" alt="profile" id="preImg">
		            
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