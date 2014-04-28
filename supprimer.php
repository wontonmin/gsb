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

    <h2>Suppression des éléments hors forfait</h2>
    
    
    <br />
    
    Votre modification a été prise en compte
    
    <br />
    <br />
    
    <?php
    
    
        //Requete de suppression
        //
        //--------------------------------------------------------
    
        $in_user = $_REQUEST['in_user'];
        $in_mois = $_REQUEST['in_mois'];
       
        //Mise à jour dans la base de données
        $pdo->supprimerHorsForfait($_REQUEST['in_user'], $_REQUEST['in_mois']);
        
       
    ?>
    
    
    <!-- Affichage des modifications -->
    
    
    Eléments hors forfait supprimées.   
    
    
</div>



<?php
//---------------------------------
include("vues/v_pied.php") ;
?>
