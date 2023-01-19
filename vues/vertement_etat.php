
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

    <link rel="stylesheet" href="../assets/css/style-liste-client.css" media="screen" type="text/css" />

<script type="text/javascript" src="../assets/js/script-etat.js" defer></script>
<script type="text/javascript" src="../assets/js/script-recherche.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	
	 <div class="form" style="width: 80%"> 
	 
		 <div class="tete">
		 	<h1>changer l'etat</h1>
		 	<div id="recherche">
			<input type="search" name="search" id="search" name="search" placeholder="rechercher......"><i class="fas fa-search"></i>
			
		</div>
		 </div>
<div id="elements">
	<table class="table">
			<thead>
				<th>#</th>
				<th>image</th>
				<th>style</th>
				<th>marque</th>
				<th>couleur</th>
				<th>qualité</th>
				<th>quantité</th>
				<th>prix</th>
				<th>anormalie</th>
				<th>proprietaire</th>
				<th class="options">nettoyer??</th>
			</thead>
			<tbody>
				<?php
				require_once '../modeles/conf.php';
				$sql='select * from vertements order by id desc';
				$req=$db->prepare($sql);
				$req->execute();
				$results=$req->fetchAll(PDO::FETCH_OBJ);
				$i=0;
				foreach ($results as $result) :
				$i++;
				?>
				<tr class="element">

					<td data-label="numero" class="data"><?= $i ?></td>
					<td data-label="image" class="data">
						<img class="img" src="../assets/images/depot/<?= $result->image ?>">
					</td>
					<td data-label="style" class="data"><?= $result->style ?></td>
					<td data-label="marque" class="data"><?= $result->marque ?></td>
					<td data-label="couleur" class="data"><?= $result->couleur ?></td>

					<td data-label="qualite" class="data"><?= $result->qualite ?></td>

					<td data-label="quantite" class="data"><?= $result->quantite ?></td>
					<td data-label="prix" class="data"><?= $result->prixU ?></td>
					<td data-label="anormalie" class="data"><?= $result->anormalie ?></td>
					<td data-label="proprietaire" class="data"><?= $result->proprietaire ?></td>

					<td data-label="nottoyer??" class="data" style="">
						<?php
						if ($result->etat == "nettoyer") {
							
							echo "deja nettoyer";
							
						} else {
							?>
							<input type="hidden" name="id" id="id" value="<?= $result -> id ?>" />
						<input type="checkbox" name="nettoyer" value="oui" id="nettoyer">
						<b id="nettoyer">Oui </b>
							<?php
						}
						
						?>
           				
					</td>
				</tr>
				
				<?php
					endforeach;
				?>
				
				
			</tbody>
		</table>
	</div>

</div>
	<div class="notification" style="background-color: #000;">
		🍉🎉Compte creer avec success🎉
	</div>

<script src="../assets/js/jquery-3.6.0.js" ></script>
</body>
</html>