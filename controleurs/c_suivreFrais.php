<?php
include ("vues/v_sommaire_c.php");
$action = $_REQUEST['action'];
?>
<center>
<?php

switch($action){
	case 'selectionner':{
		$listeFiches = $pdo->getFicheFraisSuivre();
		include("vues/v_listeFiches.php");
		break;	
	}
	
	case 'voirFiche':{
            
                $listeFiches = $pdo->getFicheFraisSuivre();
                //récupération de l'user et du mois
		$dateValid = substr($_REQUEST['lstVisiteur'], 0, 6);
		$user = substr($_REQUEST['lstVisiteur'], 6, strlen($_REQUEST['lstVisiteur']));
                //
                $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($user,$dateValid);
		$listeUtilisateur = $pdo->getNomPrenomIdVisiteur();
                $nbJustificatifs = $pdo->getNbjustificatifs($user,$dateValid);
                $lesFraisForfait= $pdo->getLesFraisForfait($user,$dateValid);
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($user,$dateValid);
		$montantValide = $lesInfosFicheFrais['montantValide'];
                include("vues/v_listeFiches.php");
                
                //--------------------------
                //si aucune fiche de frais n'existe
                if (empty($lesInfosFicheFrais)) {
                    //Message d'erreur
                    ?>
                        <span style='color:red'> Pas de fiche de frais pour ce visiteur ce mois. </span>
                    <?php
                }
                //si une fiche de frais existe
                else {
                    include ("vues/v_suivreFrais.php");
                }
		break;
	}
}

?>
</center>
