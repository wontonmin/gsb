<form name="formValidFrais" method="post" action="enregValidFrais.php">

    <input type='hidden' name='in_user' value='<?php echo $user; ?>' />
    <input type='hidden' name='in_mois' value='<?php echo $dateValid; ?>' />
    
    <br/>
    <br/>
    
    <table class="listeLegere">
       <caption>Eléments forfaitisés </caption>
        <tr>
         <?php
            foreach ( $lesFraisForfait as $unFraisForfait ) 
                 {
                    $libelle = $unFraisForfait['libelle'];
         ?>	
                    <th> <?php echo $libelle?></th>
            <?php
                }
            ?>
        </tr>
        <tr>
        <?php
            foreach (  $lesFraisForfait as $unFraisForfait  ) 
                {
                    $quantite = $unFraisForfait['quantite'];
                    $id_ff = $unFraisForfait['idfrais'];
        ?>
              <td class="qteForfait">
                  
                  <input style='width:100px' type='text' name=' <?php echo $id_ff; ?>' value=' <?php echo $quantite; ?>' />
                 
              </td>
        <?php
                }
        ?>
        </tr>
    </table>

    <br/>
    <br/>

    <table class="listeLegere">
        <caption>Descriptif des éléments hors forfait</caption>
        <tr>
            <th class="date">Date</th>
            <th class="libelle">Libellé</th>
            <th class='montant'>Montant</th>
        </tr>
        
    <?php
    
    
      foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
              {
          
                    $id_hf = $unFraisHorsForfait['id'];
                    $date = $unFraisHorsForfait['date'];
                    $libelle = $unFraisHorsForfait['libelle'];
                    $montant = $unFraisHorsForfait['montant'];
                    
    ?>
         <tr>
             
            <td>
                <?php echo $date; ?>
            </td>
            <td>
                <?php echo $libelle; ?>
               
            </td>
            <td>
                <?php echo $montant; ?>
            </td>

    <?php 
            }
    ?>

    
         </tr>
    </table>
    
    <br/>
    <br/>
    
    <!-- Etat de la fiche -->
    
    <table class="listeLegere">
        <caption>Etat de la fiche de frais</caption>
        <tr>
            <th>Etat actuel</th>
        </tr>
        <tr>
            <td>
                <?php
                
                    $etat_actuel = $lesInfosFicheFrais['libEtat'];
                    
                    echo $etat_actuel;
                ?>
                
                    <input type='hidden' name='etat_defaut' value='<?php echo $etat_actuel; ?>' />
            </td>
        </tr>
    </table>
    
    <br/>
    <br/>

    <div class="encadre">
     <p>
        <br> Montant validé : <?php echo $montantValide?>
     </p>


    <p class="titre"></p>
    <span>Nb justificatif : </span> <input type='text' name='nb_justificatif' value='<?php echo $nbJustificatifs ?>' />
    <br />
    <br />
    <input value='Enregistrer les informations' class="zone"type="submit" />
    <br />
    <br />
 
    </div>
</form>
