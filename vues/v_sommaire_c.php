    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
            <li >
                      Comptable :<br>
                    <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
            </li>
            <li>
                ---
            </li>
            <li class="smenu">
               <a href="index.php?uc=validerFrais&action=selectionnerVisiteur" title="Valider des fiches de frais">Enregistrer Opération</a>
            </li>
            <li>
                ---
            </li>
            <li class="smenu">
               <a href="index.php?uc=suivreFrais&action=selectionner" title="Suivre le paiement des fiches de frais">Suivre Paiement</a>
            </li>
            <li>
                ---
            </li>
            <li class="smenu">
               <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
            </li>
         </ul>
        
    </div>
    