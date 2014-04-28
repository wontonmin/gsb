<div id="contenu">
    
    <h1> Suivie de paiement </h1>

    <form action="index.php?uc=suivreFrais&action=voirFiche" method="post">
        <div class="corpsForm">
            <h3>Choisir une fiche : </h3>
            <p>
                <span style='color:green'>Fiche (état valider et mises en paiement):</span>
                <select id="lstVisiteur" name="lstVisiteur"> 
                <?php
                        foreach($listeFiches as $data) 
                        {
                                $v_id = $data['v_id'];
                                $v_mois = $data['v_mois'];
                                $v_montant = $data['v_montant'];
                                
                                //l'id de l'option est : mois + id
                                //ce format sera ensuite découpé par la suite.
                                //afin d'obtenir le mois et l'id séparément

                ?> 
                <option value="<?php echo $v_mois.$v_id; ?>"> <?php echo "idVisiteur: ".$v_id." - Mois(aaaamm): ".$v_mois." - MontantValider: ".$v_montant." €" ?> </option>
                <?php
                        }
                ?>
                </select>
            </p>
            <p>
                
                <br />
                <input id="ok" type="submit" value="Valider" size="20" />
            </p> 
        </div>
    </form>