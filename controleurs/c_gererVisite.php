<?php
include("vues/v_sommaire.php");
include("vues/v_ajoutVisite.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];


switch($action){
	case 'renduVisite':{

	  	 	
	
	  	 		  	 	
	  	 		  	 	$nivInt = $_REQUEST['nivInt'];
	  	 		  	 	$refP = $_REQUEST['refP'];
		$pdo->creeCompteRendu($idVisiteur,$refP,$nivInt);
														
														}break;

			
	case 'affichage' :{
			
			echo 'Entrer absence :';}break;
		}
			
			
	  	 	
	  	 	

