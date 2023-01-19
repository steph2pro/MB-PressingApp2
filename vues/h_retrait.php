<div class="tete" style="margin-top: 50px;">
		 	<h1>historique des retraits</h1>
		 	<div id="recherche">
			<input type="search" name="search" id="searchr" name="search" placeholder="rechercher......"><i class="fas fa-search"></i>
			
		</div>
		 </div>
<div id="elementsr">
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
				<th style="background: tomato">date de retrait</th>
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
					if ($result->ret_no == "retirer") {
				$i++;
				?>
				<tr class="elementr">

					<td data-label="numero" class="datar"><?= $i ?></td>
					<td data-label="image" class="datar">
						<img class="img" src="../assets/images/depot/<?= $result->image ?>">
					</td>
					<td data-label="style" class="datar"><?= $result->style ?></td>
					<td data-label="marque" class="datar"><?= $result->marque ?></td>
					<td data-label="couleur" class="datar"><?= $result->couleur ?></td>

					<td data-label="qualite" class="datar"><?= $result->qualite ?></td>

					<td data-label="quantite" class="datar"><?= $result->quantite ?></td>
					<td data-label="prix" class="datar"><?= $result->prixU ?></td>
					<td data-label="anormalie" class="datar"><?= $result->anormalie ?></td>
					<td data-label="proprietaire" class="datar"><?= $result->proprietaire ?></td>

					<td data-label="date de retrait" class="datar" style="">
						<?= $result->date_retrait ?>
           				
					</td>
				</tr>
				
				<?php
						}
					endforeach;
				?>
				
				
			</tbody>
		</table>
	</div>
