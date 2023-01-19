<!DOCTYPE html>
<html>
<head>
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/menue.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style-conteur.css" media="screen" type="text/css" />

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="text/javascript" src="../assets/js/app.js" defer></script>
    <script src="../assets/js/script-conteur.js" defer></script>
</head>
<body>
    <?php require 'menue-admin.php'; ?>
    <?php require '../controlleurs/stat.php'; ?>
	<section id="achievement">
		<h1>Les archives</h1>
		<p>
			voici vos statisque de puis votre lencement
		</p>
		<div class="counter-box">
			<div class="box">
				<i class="fas fa-bread-slice"></i>
				<h1 class="counter"  data-target="<?= $depots ?>">0</h1>
				<h4>depots</h4>	
			</div>
			<div class="box">
				<i class="fas fa-check-double"></i>
				<h1 class="counter" data-target="<?= $retrait ?>">0</h1>
				<h4>retraits</h4>
			</div>
			<div class="box">
				<i class="fas fa-clipboard"></i>
				<h1 class="counter" data-target="80">0</h1>
				<h4>factures</h4>
			</div>
			<div class="box">
				<i class="fas fa-user-check"></i>
				<h1 class="counter" data-target="<?= $statut ?>">0</h1>
				<h4>clients favories</h4>	
			</div>
			<div class="box">
				<i class="fas fa-users"></i>
				<h1 class="counter" data-target="<?= $users ?>">0</h1>
				<h4>utilisateurs</h4>	
			</div>
			
		</div>
	</section>
</body>
</html>
