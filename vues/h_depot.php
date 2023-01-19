<div class="tete">
		 	<h1>historique des depots</h1>
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
				<th style="background: tomato">date de depot</th>
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

					<td data-label="date e depot" class="data" style="">
						<?= $result->date_depot ?>
           				
					</td>
				</tr>
				
				<?php
					endforeach;
				?>
				
				
			</tbody>
		</table>
	</div>
