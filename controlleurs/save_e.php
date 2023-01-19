<?php
if(isset($_POST["id"])){
	$id=$_POST['id'];
	$etat="nettoyer";
    require_once '../modeles/conf.php';
    $query=$db->prepare('UPDATE vertements SET etat=:etat WHERE id=:id');
	$query->execute([
		"etat" =>$etat,
        "id" => $id
	]);

                //tableau de reponse
                $res=array('error'=>0);
                //affichage tu tableau converti en json
                echo json_encode($res);
                exit();
            
}
?>