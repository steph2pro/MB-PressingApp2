<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/menue.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-facture.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-profile.css">

    
<script type="text/javascript" src="../assets/js/script-depot.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form action="" method="" class="formulaire">
	 	<div class="content">
	 		<div>
	 			<img src="../assets/images/logo.jpg">
	 		</div>
	 		<div class="droite">
	 			<h1 style="color: dodgerblue">MB PRESSING</h1>
	 			<p>
	 				Blanchisserie Moderne - Nettoyage a sec en 1h
	 			</p>
	 			<b>
	 				Ramassage et livraison gratuit !!
	 			</b><br>
	 			<span>
	 				Cameroun - Bafoussam Tel:658 318 678 / 681 197 163
	 			</span><br>
	 			<b>
	 				<?php
					$maintenant = new DateTime();
					?>
	 				Date 
	 				<input type="text" name="" value="<?= $maintenant->format('d/m/Y') ?>" readonly></b>
	 		</div>
	 			
	 	</div>
	 	<div class="">
	 			<h2>FACTURE</h2>
	 			<b>
	 				Client
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
	 			</b>
	 			<table class="table">
			<thead>
				<th>Qté</th>
				<th>Designation</th>
				<th>P.U</th>
				<th>P.T</th>
			</thead>
			<tbody>
			
			
				<tr>
					<td data-label="qte"></td>
					<td data-label="Designation"></td>
					<td data-label="pu"></td>
					<td data-label="pt"></td>
				</tr>
				<tr>
					<td data-label="qte"></td>
					<td data-label="Designation"></td>
					<td data-label="pu"></td>
					<td data-label="pt"></td>
				</tr>
				<tr>
					<td data-label="qte"></td>
					<td data-label="Designation"></td>
					<td data-label="pu"></td>
					<td data-label="pt"></td>
				</tr>
				<tr>
					<td data-label="qte"></td>
					<td data-label="Designation"></td>
					<td data-label="pu"></td>
					<td data-label="pt"></td>
				</tr>
							
			</tbody>
		</table>
		<b>Avance <input type="text" name="" ></b><br>
		<b>Reste <input type="text" name="" ></b><br>

		<b>Arretée la presente facture a la somme de <input type="text" name="" ></b>
	 	</div>
	 	<table class="table" border="1" cellpadding="0" cellspacing="0">
	 		<tr>
		 		<td>Heure</td>
		 		<td>Date</td>
		 		<td>Recus par</td>
	 		</tr>
	 		<tr>
	 		<td>visa client</td>
	 		<td></td>
	 		<td> visa client</td>
	 			
	 		</tr>
	 	</table>
	 	<center>
	 	<div class="input-bouton">
	 		<button class="mon-button"  id="submit" > Enregistrer</button>
	 	</div>

	 		
	 	<h3>"MB PRESSING"</h3>
	 	<i>votre linge n'a jamais été aussi propre...</i>
	 	</center>
	 </form>

	<div class="notification" style="background-color: #000;">
		🍉🎉Compte creer avec success🎉
	</div>
	
<script src="../assets/js/jquery-3.6.0.js" ></script>

</body>
</html>