<?php 



//test si l'image a ete envoyer
if ( isset($_POST["nom"])&& isset($_POST["numero"])&& isset($_POST["commentaire"])&& isset($_POST["adress"])&& isset($_POST["statut"])) {
    //inclusion du fichier de connection a la bd
    require_once '../modeles/conf.php';
    $id=$_POST['id'];
    $nom=$_POST['nom'];
	$adress=$_POST['adress'];
	$numero=$_POST['numero'];
	$statut=$_POST['statut'];
	$commentaire=$_POST['commentaire'];

    //insertion l'image dans la bd

	//2. creer une requete qui permet d'inserer des donnees
	$query=$db->prepare('UPDATE clients SET nom=:nom,numero=:numero, residence=:adress, statut=:statut,commentaire=:commentaire WHERE id=:id');
	$query->execute([
		"nom" =>$nom,
        "numero" => $numero,
		"adress" => $adress,
		"statut" => $statut,
		"commentaire" => $commentaire,
        "id"=>$id

	]);
    $_SESSION['error']=array(
        'type'=>'success',
        'message'=>'client modifier avec success');

                //tableau de reponse
                $res=array('error'=>0);
                //affichage tu tableau converti en json
                echo json_encode($res);
                exit();
            
    
}else{
        //message d'erreur
        $em="veuillez remplir tous les champ!";
        //tableau de reponse
        $error=array('error'=>1,'em'=>$em);
        //affichage tu tableau converti en json
        echo json_encode($error);
        exit();

}


