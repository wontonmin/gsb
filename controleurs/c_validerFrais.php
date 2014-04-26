<?php
include ("vues/v_sommaire_c.php");
$action = $_REQUEST['action'];
?>
<center>
<?php

switch($action){
	case 'selectionnerVisiteur':{
		$listeUtilisateur = $pdo->getNomPrenomIdVisiteur();
		include("vues/v_listeVisiteur.php");
		break;	
	}
	
	case 'voirFiche':{
		$user = $_REQUEST['lstVisiteur'];
		$mois = $_REQUEST['mois'];
		$annee = $_REQUEST['annee'];
		$dateValid = $annee . $mois;
                $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($user,$dateValid);
		$listeUtilisateur = $pdo->getNomPrenomIdVisiteur();
                $nbJustificatifs = $pdo->getNbjustificatifs($user,$dateValid);
                $lesFraisForfait= $pdo->getLesFraisForfait($user,$dateValid);
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($user,$dateValid);
		$montantValide = $lesInfosFicheFrais['montantValide'];
                include("vues/v_listeVisiteur.php");
		include ("vues/v_validFrais.php");
		break;
	}
	
	
}

?>
</center>
