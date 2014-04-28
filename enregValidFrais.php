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
        //Frais forfait
    
        $ff_etape = $_REQUEST['ETP'];
        $ff_kilometre = $_REQUEST['KM'];
        $ff_nuit = $_REQUEST['NUI'];
        $ff_repas = $_REQUEST['REP'];
        
        $lesFrais = array(
            "ETP"=> $ff_etape,
            "KM"=> $ff_kilometre,
            "NUI"=> $ff_nuit,
            "REP"=> $ff_repas
        );
        
        //Mise à jour dans la base de données
        $pdo->majFraisForfait($_REQUEST['in_user'], $_REQUEST['in_mois'], $lesFrais);
        
        //--------------------------------------------------------
        //Etat de la fiche
        $choix_etat = $_REQUEST['etat_defaut'];
        
        //--------------------------------------------------------
        //justificatifs
        
        $justificatifs = $_REQUEST['nb_justificatif'];
        
        //Mise à jour de la base de données
        $pdo->majNbJustificatifs($_REQUEST['in_user'], $_REQUEST['in_mois'], $justificatifs);
        
    ?>
    
    
    
    
    <!-- Affichage des modifications -->
    
    
    
    <!-- Forfait-->
    
    <h2> Éléments forfaitisés </h2>
    <span> Forfait Etape : </span>
    <span style='color:red'> <?php echo $ff_etape; ?> </span>
    <br />
    
    <span> Frais Kilométrique : </span>
    <span style='color:red'> <?php echo $ff_kilometre; ?> </span>
    <br />
    
    <span> Nuitée Hôtel : </span>
    <span style='color:red'> <?php echo $ff_nuit; ?> </span>
    <br />
    
    <span> Repas Restaurant : </span>
    <span style='color:red'> <?php echo $ff_repas; ?> </span>
    <br />
    <br />
    
    <!-- Hors Forfait-->
    
    <h2> Éléments hors forfait </h2>
    
    <form name="formValidFrais" id="formValidFrais" method="post" action="supprimer.php">

        <input type='hidden' name='in_user' value='<?php echo $_REQUEST['in_user']; ?>' />
        <input type='hidden' name='in_mois' value='<?php echo $_REQUEST['in_mois']; ?>' />
        
        <input type="submit" value="Supprimer les éléments hors forfait ?" />
        
    </form>

    <br />
    
    <!-- Etat -->
    
    <h2> État de la fiche de frais </h2>
    <span>État de la fiche : </span>
    <span style='color:red'><?php echo $choix_etat; ?> </span>
    <br />
    <br />
    
    <!-- justificatifs -->
    
    <h2> Justificatif </h2>

    <span>Nb justificatif : </span>
    <span style='color:red'><?php echo $justificatifs; ?> </span>
    <br />
    <br />
    
    <form name="formValidFrais" method="post" action="validFrais.php">
        
        <input type='hidden' name='etat' value='VA' />
        <input type='hidden' name='in_user' value='<?php echo $_REQUEST['in_user']; ?>' />
        <input type='hidden' name='in_mois' value='<?php echo $_REQUEST['in_mois']; ?>' />
        
        <input value='Valider la fiche' class="zone"type="submit" />
        
    </form>
        
    
    
</div>



<?php
//---------------------------------
include("vues/v_pied.php") ;
?>
