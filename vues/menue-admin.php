<?php 
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: ../index.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
    <link rel="stylesheet" href="../assets/css/menue.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">

    <link rel="stylesheet" href="../assets/css/style-liste-client.css" media="screen" type="text/css" />


<script type="text/javascript" src="../assets/js/script-ecrit.js" defer></script>

<script type="text/javascript" src="../assets/js/app.js" defer></script>
</head>
<body>

	<div class="sidebar">
		<div class="logo_details">
			<img src="../assets/images/logo.jpg" width="10%" height="50%">
			<span class="logo_name">MB-Pressing</span>
			
		</div>
		<ul class="nav-links">
			<li>
				<a href="dashboad.php">
					<i class="fas fa-th-large"></i>
					<span class="link_name">Tableau de Bord</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="#">Tableau de Bord</a></li>
					
				</ul>
			</li>
			<li>
				<div class="icon-link">
					<a href="#">
						<i class="fas fa-layer-group"></i>
						<span class="link_name">Vertements</span>
					</a>
					<i class="fas fa-angle-right arrow"></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="">vertements</a></li>
					<li><a href="depot_form.php">Depot</a></li>
					<li><a href="retrait.php">Retrait</a></li>
					<li><a href="vertement_plus.php">Plus</a></li>
				</ul>
			</li>
			<li>
				<div class="icon-link">
					<a href="#">
						<i class="fas fa-clipboard"></i>
						<span class="link_name">Facturation</span>
					</a>
					<i class="fas fa-angle-right arrow"></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="">Facturation</a></li>
					<li><a href="fact_edit.php">Editer</a></li>
					<li><a href="#">Liste</a></li>
				</ul>
			</li>
			<li>
				<div class="icon-link">
					<a href="#">
						<i class="fas fa-address-card"></i>
						<span class="link_name">Clients</span>
					</a>
					<i class="fas fa-angle-right arrow"></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Clients</a></li>
					<li><a href="client_form.php">Ajouter</a></li>
					<li><a href="liste_client.php">Liste</a></li>
					<li><a href="client_plus.php">Plus</a></li>
				</ul>
			</li>
			<li>
				<div class="icon-link">
					<a href="#">
						<i class="fas fa-users-cog"></i>
						<span class="link_name">Utilisateurs</span>
					</a>
					<i class="fas fa-angle-right arrow"></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Utilisateurs</a></li>
					<li><a href="user_form.php">Ajouter</a></li>
					<li><a href="user_list.php">Liste</a></li>
					<li><a href="user_plus.php">Plus</a></li>
				</ul>
			</li>
			<li>
				<div class="icon-link">
					<a href="#">
						<i class="fas fa-sync-alt"></i>
						<span class="link_name">Mis A jour</span>
					</a>
					<i class="fas fa-angle-right arrow"></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Mis A jour</a></li>
					<li><a href="vertement_etat.php">Vertements</a></li>
					<li><a href="client_plus.php">Clients</a></li>
					<li><a href="user_plus.php">Utilisateurs</a></li>
			
				</ul>
			</li>
			<li>
				<a href="analyse.php">
					<i class="fas fa-recycle"></i>
					<span class="link_name">Analyser</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="analyse.php">Analyser</a></li>
					
				</ul>
			</li>
			<li>
				<a href="statistique.php">
					<i class="fas fa-chart-line"></i>
					<span class="link_name">Statistique</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="statistique.php">Statistique</a></li>
					
				</ul>
			</li>
			<li>
				<a href="historique.php">
					<i class="fas fa-history"></i>
					<span class="link_name">Historique</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="historique.php">Historique</a></li>
					
				</ul>
			</li>
			<li>
				<a href="parametre.php">
					<i class="fas fa-cogs"></i>
					<span class="link_name">Parametre</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="parametre.php">Parametre</a></li>
					
				</ul>
			</li>
			<li>
		
				<div class="profile-details">
					<a href="compte.php">
					<div class="profile-content">
						<img src="../assets/images/profiles/<?= $_SESSION['user']['profile']; ?>" alt="profile">
					</div>
					</a>
					<div class="name-job">
						<a href="compte.php">
						<div class="profile-name">
						<?php if (isset($_SESSION['user'])) echo $_SESSION['user']['nom']; ?>
						</div>
						</a>
						<div class="job">
							<?php if (isset($_SESSION['user'])) echo $_SESSION['user']['poste']; ?>
						</div>
						
					</div>
					<a href="../controlleurs/logout.php" title="se deconecter">
					<i class="fas fa-sign-out-alt"></i>
					</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="home-section">
		<div class="home-content">
			<i class="fas fa-bars bx-menu"></i>
			<span class="text"> </span>
			<span class="typed text" data-typed-items="Bienvenue <?= $_SESSION['user']['nom']?>, Vous êtes <?= $_SESSION['user']['poste'] ?>, faite bon usage , de cet aplication, MERCI"></span>
		</div>
	</div>

<script type="text/javascript" src="../assets/js/typed.js/typed.min.js" ></script>

</body>
</html>