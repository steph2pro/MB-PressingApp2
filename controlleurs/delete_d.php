<?php
	//lorsquon creer une session elle se ferme lorsqu'on ferme le navigateur
	session_start();

	//inclusion de la page de connection
	require_once'../modeles/conf.php';
	$id=$_GET['id'];
	$sql='delete from vertements where id=?';
	$req=$db->prepare($sql);
	$req->execute(array($id));
	$_SESSION['error']=array(
		'type'=>'success',
		'message'=>'vertement suprimer avec success');
	header('Location:../vues/vertement_plus.php');

?>