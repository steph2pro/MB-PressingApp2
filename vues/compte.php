


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/style-client.css" media="screen" type="text/css" />

    <link rel="stylesheet" href="../assets/css/style-compte.css" media="screen" type="text/css" />
</head>
<body>
	 <?php require 'menue-admin.php'; ?>
	 <div class="form" style="width: 40%;height: 70vh;margin-left: 35%;padding-top: 5%">
	 	<div class="profile">
	 		<img src="../assets/images/profiles/<?= $_SESSION['user']['profile']; ?>" alt="profile">
	 		<b><?= $_SESSION['user']['nom'];?>&nbsp;<?= $_SESSION['user']['prenom'];?></b>
	 	</div>
	 	<div>
	 		<p>
	 		
	 		vous residez a <b><?= $_SESSION['user']['adress'];?></b>,<br>
	 		vous avez <b><?= $_SESSION['user']['age'];?></b> ans et etes <b><?= $_SESSION['user']['statut'];?></b>,<br>
	 		votre poste est <b><?= $_SESSION['user']['poste'];?></b>
	 		</p>
	 		
	 	</div>
	 	
	 	<div class="input-bouton">
	 		<a href="update_compt.php">
	 			<button><i class="fas fa-edit"></i>&nbsp;modifier</button>
	 		</a>
	 		<a href="../controlleurs/logout.php" style="margin-left: 15px">
	 			<button style="background: tomato;"><i class="fas fa-sign-out-alt"></i>&nbsp;se deconnecter</button>
	 		</a>
	 	</div>
	 </div>
</body>
</html>