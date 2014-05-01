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
                
                <label class="titre">Mois :</label>
                <select name="mois">
                    <option value="01" <?php if ($in_mois == "01") echo "selected";?> >01</option>
                    <option value="02" <?php if ($in_mois == "02") echo "selected";?> >02</option>
                    <option value="03" <?php if ($in_mois == "03") echo "selected";?> >03</option>
                    <option value="04" <?php if ($in_mois == "04") echo "selected";?> >04</option>
                    <option value="05" <?php if ($in_mois == "05") echo "selected";?> >05</option>
                    <option value="06" <?php if ($in_mois == "06") echo "selected";?> >06</option>
                    <option value="07" <?php if ($in_mois == "07") echo "selected";?> >07</option>
                    <option value="08" <?php if ($in_mois == "08") echo "selected";?> >08</option>
                    <option value="09" <?php if ($in_mois == "09") echo "selected";?> >09</option>
                    <option value="10" <?php if ($in_mois == "10") echo "selected";?> >10</option>
                    <option value="11" <?php if ($in_mois == "11") echo "selected";?> >11</option>
                    <option value="12" <?php if ($in_mois == "12") echo "selected";?> >12</option>    
                </select>
                </br>
                </br>
                <label class="titre">Année :</label>
                <select name="annee">
                    <option value="2010" <?php if ($in_annee == "2010") echo "selected";?> >2010</option>
                    <option value="2011" <?php if ($in_annee == "2011") echo "selected";?> >2011</option>
                    <option value="2012" <?php if ($in_annee == "2012") echo "selected";?> >2012</option>
                    <option value="2013" <?php if ($in_annee == "2013") echo "selected";?> >2013</option>
                    <option value="2014" <?php if ($in_annee == "2014") echo "selected";?> >2014</option>
                </select>
                </br>
                </br>
                <input id="ok" type="submit" value="Valider" size="20" />
            </p> 
        </div>
    </form>