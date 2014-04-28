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
    
        //
        //--------------------------------------------------------
        //Etat de la fiche

        $in_user = $_REQUEST['in_user'];
        $in_mois = $_REQUEST['in_mois'];
    
            //Mise à jour dans la base de données
            //Seul les élément forfait sont pris en compte dans la mise a jour vers la base de donnés.
            $pdo->majEtatFicheFrais($in_user, $in_mois, 'VA');
        
    ?>
    
    <!-- Etat -->
    
    <h2> État de la fiche de frais </h2>
    <span>État de la fiche : </span>
    <span style='color:green'> Validée et mise en paiement </span>
    <br />
    <br />

</div>



<?php
//---------------------------------
include("vues/v_pied.php") ;
?>
