
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

    <link rel="stylesheet" href="../assets/css/style-liste-client.css" media="screen" type="text/css" />
    
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="text/javascript" src="../assets/js/script-recherche.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	
	 <div class="form" style="width: 80%">
	 	<?php

		  if (isset($_SESSION['error'])) {
		    // code...
		    $error=$_SESSION['error'];
		    ?>
		    <div class="tete1">
		    	<?= $error['message']  ?>	
		    </div>
		  
		    <?php
		    //fermeture de la session
		    unset($_SESSION['error']);
		  } 
		?> 
		 <div class="tete">
		 	<h1>plus d'options </h1>
		 	<div id="recherche">
			<input type="search" name="search" id="search" name="search" placeholder="rechercher......"><i class="fas fa-search"></i>
			
		</div>
		 </div>
<div id="elements">
	<table class="table">
			<thead>
				<th>#</th>
				<th>profile</th>
				<th>nom et prenom</th>
				<th>poste</th>
				<th>mot de pass</th>
				<th>telephone</th>
				<th>statut</th>
				<th>options</th>
			</thead>
			<tbody>
				<?php
				require_once '../modeles/conf.php';
				$sql='select * from users order by id desc';
				$req=$db->prepare($sql);
				$req->execute();
				$results=$req->fetchAll(PDO::FETCH_OBJ);
				$i=0;
				foreach ($results as $result) :
				$i++;
				$update='updateUser.php?id='.$result->id;
				$delete='../controlleurs/delete_u.php?id='.$result->id;
				?>
				<tr class="element">

					<td data-label="numero" class="data"><?= $i ?></td>
					<td data-label="image" class="data"><img class="img" src="../assets/images/profiles/<?= $result->profile ?>"></td>
					<td data-label="nom" class="data"><?= $result->nom ?>&nbsp;<?= $result->prenom ?></td>
					<td data-label="telephone" class="data"><?= $result->poste ?></td>
					<td data-label="residence" class="data"><?= $result->password ?></td>
					<td data-label="residence" class="data"><?= $result->tel ?></td>
					<td data-label="statut" class="data"><?= $result->statut ?></td>
					<td data-label="option">
						<a href="<?= $update ?>" class="update"><i class="fas fa-edit"></i></a></a>
						<a href="<?= $delete ?>" class="delete"><i class="fas fa-trash-alt"></i>
					</td>

				</tr>
				
				<?php
					endforeach;
				?>
				
				
			</tbody>
		</table>
	</div>
</div>
</body>
</html>