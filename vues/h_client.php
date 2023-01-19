
		 <div class="tete">
		 	<h1>historique des clients</h1>
		 	<div id="recherche">
			<input type="search" name="search" id="searchc" name="search" placeholder="rechercher......"><i class="fas fa-search"></i>
			
		</div>
		 </div>
<div id="elementsc">
	<table class="table">
			<thead>
				<th>#</th>
				<th>nom</th>
				<th>telephone</th>
				<th>adress</th>
				<th>statut</th>
				<th class="options">date enregistrement</th>
			</thead>
			<tbody>
				<?php
				require_once '../modeles/conf.php';
				$sql='select * from clients order by id desc';
				$req=$db->prepare($sql);
				$req->execute();
				$results=$req->fetchAll(PDO::FETCH_OBJ);
				$i=0;
				foreach ($results as $result) :
				$i++;
				?>
				<tr class="elementc">

					<td data-label="numero" class="datac"><?= $i ?></td>
					<td data-label="nom" class="datac"><?= $result->nom ?></td>
					<td data-label="telephone" class="datac"><?= $result->numero ?></td>
					<td data-label="residence" class="datac"><?= $result->residence ?></td>

					<td data-label="statut" class="datac"><?= $result->statut ?></td>
					<td data-label="date" class="datac"><?= $result->date_enr ?></td>

				</tr>
				
				<?php
					endforeach;
				?>
				
				
			</tbody>
		</table>
	</div>