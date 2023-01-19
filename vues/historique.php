


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/style-client.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-liste-client.css" media="screen" type="text/css" />

    <link rel="stylesheet" href="../assets/css/style-histotique.css" media="screen" type="text/css" />
<script type="text/javascript" src="../assets/js/script-recherche.js" defer></script>
<script type="text/javascript" src="../assets/js/script-recherche_r.js" defer></script>
<script type="text/javascript" src="../assets/js/script-recherche_c.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <div class="form" style="width: 80%" >
	 	<?php require 'h_depot.php'; ?>
	 	<?php require 'h_retrait.php'; ?>
	 	<h3>historique des facturations </h3>
	 	<table class="table">
			<thead>
				<th>#</th>
				<th>nom</th>
				<th>numero</th>
				<th>adress</th>
				<th>statut</th>
			</thead>
			<tbody>
			
				<tr>
					<td data-label="#">1</td>
					<td data-label="nom">kamsu</td>
					<td data-label="numero">sebace</td>
					<td data-label="adress">bafoussam</td>
					<td data-label="statut">regulier</td>
				</tr>
				
				
			</tbody>
		</table>
	 	<?php require 'h_client.php'; ?>
	 	
	 	
	 	
	 </div>
</body>
</html>