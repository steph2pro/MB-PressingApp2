<?php
	//connexion a la base de donnees
	try
	{
		$db= new PDO('mysql: host= localhost; dbname=ges_pressing; charset=utf8', 'root', '');
			
		
		}
	catch(PDOException $e)
	{
		die('erreur :'. $e->getMessage());
	}
?>