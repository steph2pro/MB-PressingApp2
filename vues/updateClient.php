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


<script type="text/javascript" src="../assets/js/script-client-update.js" defer></script>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <form class="form">
	 	<?php
    
             require_once '../modeles/conf.php';

            $id=$_GET['id'];
            //pour convertir l'id en entier
            $id2=(int)$id;
            $sql='select * from clients where id=?';
            $req=$db->prepare($sql);
            $req->execute(array($id2));
            $results=$req->fetchAll(PDO::FETCH_OBJ);
            
            foreach ($results as $result) :

    ?>
	 	<h2>Modification</h2>

            <input type="hidden" name="id" id="id" value="<?= $result -> id ?>" />
	 	<div class="input-block">
	 		<input type="text" name="nom" id="nom" placeholder="nom du client" value="<?= $result -> nom ?>" >
	 		<input type="number" name="numero" id="numero" placeholder="numero de telephone" value="<?= $result -> numero ?>" >
	 	</div>
	 	<div class="input-block">
	 		<input type="text" name="adress" id="adress" placeholder="lieu de residence" value="<?= $result -> residence ?>" >
	 		<select name="statut" id="statut" title="choisisez son statut">
	 			<option value="<?= $result -> statut ?>"> <?= $result -> statut ?> </option>
	 			<option value="regulier"> regulier </option>
	 			<option value="irregulier">irregulier</option>
	 			<option value="favorie">favorie</option>
	 		</select>
	 	</div>
	 	<div class="">
	 		<textarea placeholder="commentaire sur le client" id="commentaire"><?= $result -> commentaire ?></textarea>
	 	</div>
	 	<div class="input-bouton">
	 		<button class="" id="submit"> Modiffier</button>
	 	</div>

    <?php
        endforeach;
    ?>
	 </form>

	<div class="notification" style="background-color: #000;">
		🍉🎉Compte modiffier avec success🎉
	</div>
	
<script src="../assets/js/jquery-3.6.0.js" ></script>

</body>
</html>