<?php
if(isset($_POST["id"])){
	$id=$_POST['id'];
	$ret="retirer";
    require_once '../modeles/conf.php';
    $query=$db->prepare('UPDATE vertements SET ret_no=:retrait,date_retrait=NOW() WHERE id=:id');
	$query->execute([
		"retrait" =>$ret,
        "id" => $id
	]);

                //tableau de reponse
                $res=array('error'=>0);
                //affichage tu tableau converti en json
                echo json_encode($res);
                exit();
            
}
?>