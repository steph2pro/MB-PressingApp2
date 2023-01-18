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

    
<script type="text/javascript" src="../assets/js/script-depot-update.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form action="" method="" class="form">
	 	<?php
    
             require_once '../modeles/conf.php';

            $id=$_GET['id'];
            //pour convertir l'id en entier
            $id2=(int)$id;
            $sql='select * from vertements where id=?';
            $req=$db->prepare($sql);
            $req->execute(array($id2));
            $results=$req->fetchAll(PDO::FETCH_OBJ);
            
            foreach ($results as $result) :

    ?>
	 	<h2>Modiffier un Depot </h2>

            <input type="hidden" name="id" id="id" value="<?= $result -> id ?>" />
	 	<div class="input-block">
	 		<input type="text" name="style" id="style" placeholder="Style du vertement" value="<?= $result -> style ?>">
	 		<input type="text" name="marque" id="marque" placeholder="Marque" value="<?= $result -> marque ?>">
	 	</div>
	 	<div class="input-block">
	 		<input type="text" name="couleur" id="couleur" placeholder="couleur" value="<?= $result -> couleur ?>">
	 		<input type="text" name="qualite" id="qualite" placeholder="qualité du textile" value="<?= $result -> qualite ?>">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="quantite" id="quantite" placeholder="Quantité" value="<?= $result -> quantite ?>">
	 		<input type="text" name="anormalie" id="anormalie" placeholder="Anormalie" value="<?= $result -> anormalie ?>">
	 	</div>
	 	<div class="input-block">
	 		<input type="number" name="prix" id="prix" placeholder="Prix Unitaire" value="<?= $result -> prixU ?>">
	 		<select name="proprietaire" id="proprietaire" title="selectionez le nom du client">
	 			<option value="<?= $result -> proprietaire ?>"><?= $result -> proprietaire ?></option>
	 			<?php

                  $sql="select * from clients order by id desc";
                  $req=$db->prepare($sql);
                  $req->execute();
                  $rs=$req->fetchAll(PDO::FETCH_OBJ);
                 
                  foreach ($rs as $r):
                  
                  ?>
                  <option value="<?= $r->nom ?>"><?= $r->nom ?></option>
                    
                  <?php 
                    endforeach;

                  ?>
	 		</select>
	 	</div>
	 	
	 	<div class="" style="display: flex;">
	 		<textarea placeholder="description du vertement" id="description" rows="10" style="width: 50%"><?= $result -> description ?></textarea>
	 		<div class="upload2">
		        <div class="img">
		            <img src="../assets/images/depot/<?= $result -> image ?>" alt="profile" id="preImg">
		            
		        </div>
		        <div class="round">
		            <input type="file" name="profile" id="profile" value="<?= $result -> image ?>">
		            <i class="fas fa-camera" style="color: aliceblue;"></i>
	        	</div>
    		</div>
	 	</div>
	 	<div class="input-bouton">
	 		<button class="mon-button"  id="submit" > Modiffier</button>
	 	</div>

    <?php
        endforeach;
    ?>
	 </form>

	<div class="notification" style="background-color: #000;">
		🍉🎉Compte creer avec success🎉
	</div>
	
<script src="../assets/js/jquery-3.6.0.js" ></script>

</body>
</html>