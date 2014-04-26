<form name="formValidFrais" method="post" action="enregValidFrais.php">
	
		
	
       
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
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
                 <td  style="float:right;">
                    <select size="3" name="situ" style="float:right">
                        
                        <option value="E">Enregistré</option>
                        <option value="V">Validé</option>
                        <option value="R">Remboursé</option>
                        
                    </select>
                    
                </td>
		</tr>
      
        
        </table>
    
    
    
    <br/><br/><br/><br/><br/><br/><br/>
    
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
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                  
        <?php 
          }
		?>
   
        <td  style="float:right;">
                    <select size="3" name="situ" style="float:right">
                        
                        <option value="E">Enregistré</option>
                        <option value="V">Validé</option>
                        <option value="R">Remboursé</option>
                        
                    </select>
                    
                </td>
             </tr>
        </table>
    
        <div class="encadre">
         <p>
            <br> Montant validé : <?php echo $montantValide?>
         </p>
 
		
	<p class="titre"></p>
        <span>Nb justificatif : </span><?php echo $nbJustificatifs ?>
	<p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
        
        
     </div>
</form>
