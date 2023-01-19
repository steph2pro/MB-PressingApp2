<?php
             require_once '../modeles/conf.php';
//pour les depot de vertement
			$sql='select * from vertements '; 
            $req=$db->prepare($sql);
            $req->execute();
            $req->fetchAll(PDO::FETCH_OBJ);
            
            $depots=$req->rowCount();

//pour les depot de retrait
			$sql='select * from vertements where ret_no ="retirer"'; 
            $req=$db->prepare($sql);
            $req->execute();
           $req->fetchAll(PDO::FETCH_OBJ);
            
            $retrait=$req->rowCount();
//pour les depot de retrait
			$sql='select * from clients where statut ="favorie"'; 
            $req=$db->prepare($sql);
            $req->execute();
           $req->fetchAll(PDO::FETCH_OBJ);
            
            $statut=$req->rowCount();
//pour les depot de retrait
			$sql='select * from users'; 
            $req=$db->prepare($sql);
            $req->execute();
           $req->fetchAll(PDO::FETCH_OBJ);
            
            $users=$req->rowCount();