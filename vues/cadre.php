<!DOCTYPE html>
<html lang="en">

<head>
    <title>MB-Pressing</title>
    <link rel="icon" type="image/jpg" sizes="26x26" href="../assets/images/logo.jpg">
 <link rel="stylesheet" href="../assets/css/style-cadre.css" media="screen" type="text/css" />
</head>
<div class="cardre">
		
		<section>
			<div class="images">
				<div>
					<div id="img1">
					<a href="../controleurs/client.php">
						<img src="../assets/images/ad.png"  width="90px" id="im">
					</a>
					</div>
					<div class="mot">
						<a href="../controleurs/client.php">
						ajout client
						</a>
					</div>
					<div class="img">

						<a href="../controleurs/sup_client.php">
							<img src="../assets/images/supclient.png"  width="50px" id="im1">
						</a>
					
					</div>
					<div class="mot1">

						<a href="../controleurs/sup_client.php">
						suprimer
						</a>
					</div>
					<div class="img1">
						<a href="../controleurs/mod_client.php">
							<img src="../assets/images/mod.png"  width="80px" id="im2">
						</a>
					</div>
					<div class="mot2">
						<a href="../controleurs/mod_client.php">
						modifier
						</a>
					</div>
				</div>
				<div>
					<a href="../controleurs/liste_facture.php">
					<img src="../assets/images/fact.png" id="img2">
					</a>
					<div class="img3">
					<a href="../facturation.php">
						<img src="../assets/images/to.png" width="140px" height="80px" id="im3">
					</a>
					</div>
					
				</div>
				<div class="img4">

					<a href="../controleurs/client_fav.php">
						<img src="../assets/images/client fav.png" id="im4">
					</a>
				</div>
				<a href="mise_a_jour.php">
				<div class="img5">
						<img src="../assets/images/mise_a_jour.png" id="im7">
					
				</div>
				</a>
				<div class="images1">
					
					<a href="../controleurs/liste_depot-admin.php">
						<img src="../assets/images/hab.png" id="im6">
					</a>

					<a href="../controleurs/liste_client.php">
						<img src="../assets/images/clients.png" id="im5">
					</a>
				
				</div>
				
				<div class="img6">
					<a href="../modeles/depot-admin.php">
						<img src="../assets/images/habit.png" id="im9">
					</a>
					<a href="../modeles/depot-admin.php">
						<img src="../assets/images/plus.png" id="im8">
					</a>
					
				</div>
				
			</div>
			<div id="mots">
				<b id="mot1">

					<a href="../controleurs/client_fav.php">
						client favorie
					</a>
				</b>
				<b id="mot2">
					<a href="../facturation.php">
						editer 
					</a>
				</b>
				<b id="mot3">
					<a href="../controleurs/liste_depot-admin.php">
					vetement
					</a>
				</b>
				<b id="mot4">
					<a href="mise_a_jour.php">
					mise a jour
					</a>
				</b>
				<b id="mot5">
					<a href="../controleurs/liste_client.php">
						clients 
					</a>
				</b>
				
					<b id="mot6">
						<a href="../modeles/depot-admin.php">
						depot
						</a>
					</b>
				

				

			</div>
			<u>
				infos important
			</u>
			<div class="bass">
				<div class="bas1">
					
					clients enregistrer
					<input type="text" name="" value="<?php echo $cli; ?>">
				</div>
				<div class="bas2">
					
					client favorie
					<input type="text" name=""  value="<?php echo $cli_fav; ?>">
				</div>
				<div class="bas3">
					
					nombre de depot
					<input type="text" name="" value="<?php echo $depot; ?>">
				</div>
			</div>
			<div style="text-align: center; font-size: 1.3vw;">
				<b>pour plus d'information ou en cas de probleme contacter le web master au &nbsp; <i style="text-transform: uppercase;">671506217</i></b>
			</div>
		
		</section>
	</div>