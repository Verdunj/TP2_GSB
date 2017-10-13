<?php
include("vues/v_sommaire.php");
include("vues/v_ajoutVisite.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];


switch($action){
	case 'renduVisite':{
			$refVisiteur = $idVisiteur;
			$refPraticien = $_REQUEST['refPraticien'];
			$niveauInteret = $_REQUEST['niveauInteret'];
			$pdo->creeCompteRendu($refVisiteur,$refPraticien,'now()',$niveauInteret);}break;
			
	case 'affichage' :{
			
			echo 'Entrer absence :';}break;
		}
			
			
/*	  	 	
	  	 	
	  	 	$bdd = new PDO('mysql:host=localhost;dbname=gsb_frais2;charset=utf8', 'admin', 'admin');
	  	 	$requete1 = $bdd->prepare('INSERT into Visite(refVisiteur,refPraticien,niveauInteret) VALUES(:refVisiteur,:refPraticien,:niveauInteret)');
	  	 	$requete1->execute(array(
	  	 	'refVisiteur' => $refVisiteur,
	  	 	'refPraticien' => $refPraticien,
	  	 	'niveauInteret' => $niveauInteret
	  	 	));
			*/

