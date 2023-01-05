<?php 



//test si l'image a ete envoyer
if (isset($_FILES["profile"]) && isset($_POST["nom"])&& isset($_POST["prenom"])&& isset($_POST["password"])&& isset($_POST["adress"])&& isset($_POST["age"])) {
    //inclusion du fichier de connection a la bd
    require_once '../modeles/conf.php';
    # recuperation des information sur limage
    $img_name=$_FILES["profile"]["name"];
    $img_size=$_FILES["profile"]["size"]/1024;//pour convertir la taille es Ko
    $tmp_name=$_FILES["profile"]["tmp_name"];
    $error   =$_FILES["profile"]["error"];
    $nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$password=$_POST['password'];
	$adress=$_POST['adress'];
	$age=$_POST['age'];
	$numero=$_POST['numero'];
	$poste=$_POST['poste'];
	$statut=$_POST['statut'];
	$commentaire=$_POST['commentaire'];
    //test s'ilya pas d'erreur lors de upload
    if ($error === 0) {
        //test si l'image est trop grand
       if ($img_size>100000) {
            //message d'erreur
            $em="desole,ce fichier est trop grand !";
            //tableau de reponse
            $error=array('error'=>1,'em'=>$em);
            //affichage tu tableau converti en json
            echo json_encode($error);
            exit();
       }else{
            //recuperation de l'extension du fichier
            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
            //convertion de cet extension en miniscule
            $img_ex_min=strtolower($img_ex);
            //creation d'un tableau pour stocker les extenssion acceptable
            $allowed_exs=array("jpg","jpeg","png");
            //test si l'extension de l'image est parmi de ceux acceptable
            if (in_array($img_ex_min,$allowed_exs)) {
                //on renome l'image en le donant un nom aleatoir
                $new_img_name=uniqid("PROFILE-",true).'.'.$img_ex_min;
                //creation du repertoire pour les image
                $img_upload_path="../assets/images/profiles/".$new_img_name;
                //on deplace l'image vers le dossier profiles
                move_uploaded_file($tmp_name,$img_upload_path);
                //insertion l'image dans la bd

	
	//2. creer une requete qui permet d'inserer des donnees
	$query=$db->prepare('INSERT INTO users SET nom=:nom, prenom=:prenom,age=:age, poste=:poste, password=:password, residence=:adress,tel=:numero, statut=:statut,profile=:profile,commentaire=:commentaire');
	$query->execute([
		"nom" =>$nom,
		"prenom" => $prenom,
		"age" =>$age,
		"poste" =>$poste,
		"password" =>$password,
		"adress" => $adress,
		"numero" => $numero,
		"statut" => $statut,
		"profile" =>$new_img_name,
		"commentaire" => $commentaire

	]);

                //tableau de reponse
                $res=array('error'=>0,'src'=>$new_img_name);
                //affichage tu tableau converti en json
                echo json_encode($res);
                exit();
            } else {
               //message d'erreur
                $em="ce type de ce fichier n'est pas suporter!";
                //tableau de reponse
                $error=array('error'=>1,'em'=>$em);
                //affichage tu tableau converti en json
                echo json_encode($error);
                exit();
            }
       }   
       
    } else {
        //message d'erreur
        $em="une erreur es survenue !";
        //tableau de reponse
        $error=array('error'=>1,'em'=>$em);
        //affichage tu tableau converti en json
        echo json_encode($error);
        exit();
    }
    
}else{
        //message d'erreur
        $em="veuillez remplir tous les champ!";
        //tableau de reponse
        $error=array('error'=>1,'em'=>$em);
        //affichage tu tableau converti en json
        echo json_encode($error);
        exit();

}


