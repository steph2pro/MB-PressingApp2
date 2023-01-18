<?php
session_start();
require_once '../modeles/conf.php';

if (isset($_POST['nom']) && isset($_POST['mot_de_pass'])) {
	


	if (!empty($_POST['nom']) && !empty($_POST['mot_de_pass'])) {

		$nom=stripslashes($_REQUEST['nom']);
		$password=stripslashes($_REQUEST['mot_de_pass']);

		$req=$db->prepare("select * from users where nom=? and password=?");
		$req->execute(array($nom,$password));
		$datas=$req->fetchAll(PDO::FETCH_OBJ);
		
		
		if ($req->rowCount()==1) {
			foreach ($datas as $data) {
				
				$_SESSION['user']=array(
					'id'=>$data->id,
					'nom'=>$data->nom,
					'prenom'=>$data->prenom,
					'password'=>$data->password,
					'poste'=>$data->poste,
					'profile'=>$data->profile,
					'age'=>$data->age,
					'adress'=>$data->residence,
					'statut'=>$data->statut,
					'tel'=>$data->tel
				);
				
			}
					

					if ($data->poste == "admin" || $data->poste == "administrateur") {
						header('Location: ..\vues\dashboad.php');
					} else {
						header('Location: ..\vues\dashboad2.php');
					}
		} else header('Location: ../index.php?login_err=already');
			
		
	} else header('Location: ../index.php?login_err=empty');
} else header('Location: ../index.php');
?>