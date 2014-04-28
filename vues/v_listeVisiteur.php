<div id="contenu">
    
    <h1> Validation des frais par visiteur </h1>

    <form action="index.php?uc=validerFrais&action=voirFiche" method="post">
        <div class="corpsForm">
            <h3>Visiteur à sélectionner : </h3>
            <p>
                <label for="lstVisiteur" accesskey="v">Visiteur:</label>
                <select id="lstVisiteur" name="lstVisiteur"> 
                <?php
                        while($data = $listeUtilisateur->fetch()) 
                        {
                                $idUtilisateur = $data['id'];
                                $nomUtilisateur = $data['nom'];
                                $prenomUtilisateur = $data['prenom'];

                ?> 
                <option 
                    <?php 
                        //selection le visiteur choisie
                        if (isset($_REQUEST['lstVisiteur'])) {
                            if ($_REQUEST['lstVisiteur'] == $idUtilisateur) {
                                echo "selected"; 
                            }
                        }
                    ?>
                    value="<?php echo $idUtilisateur?>"> <?php echo $nomUtilisateur." ".$prenomUtilisateur ?> </option>
                <?php
                        }
                ?>
                </select>
            </p>
            <p>
                
                <?php
                
                    //Récupère les valeurs de mois et année pour les affiches
                
                    if (isset($_REQUEST['mois'])) {
                        $in_mois = $_REQUEST['mois'];
                    }
                    else {
                        //N'affiche rien si aucune information n'est entrées
                        $in_mois = "";
                    }
                    if (isset($_REQUEST['annee'])) {
                        $in_annee = $_REQUEST['annee'];
                    }
                    else {
                        //N'affiche rien si aucune information n'est entrées
                        $in_annee = "";
                    }
                ?>
                
                <label class="titre">Mois :</label> <input value='<?php echo $in_mois; ?>'class="zone" type="text" name="mois" size="12" />
                </br>
                </br>
                <label class="titre">Année :</label> <input value='<?php echo $in_annee; ?>' class="zone" type="text" name="annee" size="12" />
                </br>
                </br>
                <input id="ok" type="submit" value="Valider" size="20" />
            </p> 
        </div>
    </form>