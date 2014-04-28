<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
//-------------------------------

    //Menu de gauche
    include("vues/v_sommaire_c.php");

?>



﻿<div id="contenu">

    <h2>Enregistrement</h2>
    
    
    <br />
    
    Votre modification a été prise en compte
    
    <br />
    <br />
    
    <?php
    
    
        //Récupération des informations
        //
        //--------------------------------------------------------
        //Etat de la fiche
        
        $choix_etat = "";
    
        $choix = $_REQUEST['etat_defaut'];
        switch($choix) {
            case 'CL': $choix_etat = "Saisie clôturée"; break;
            case 'CR': $choix_etat = "Fiche créée, saisie en cours"; break;
            case 'RB': $choix_etat = "Remboursée"; break;
            case 'VA': $choix_etat = "Validée et mise en paiement"; break;
        }
        //Mise à jour dans la base de données
        //Seul les élément forfait sont pris en compte dans la mise a jour vers la base de donnés.
        $pdo->majEtatFicheFrais($_REQUEST['in_user'], $_REQUEST['in_mois'], 'RB');

    ?>
    
    
    
    
    <!-- Affichage des modifications -->
    
    <br />
    
    <!-- Etat -->
    
    <h2> Etat de la fiche de frais </h2>
    <span>Etat de la fiche : </span>
    <span style='color:red'> Remboursée </span>
    <br />
    <br />
    
</div>



<?php
//---------------------------------
include("vues/v_pied.php") ;
?>
