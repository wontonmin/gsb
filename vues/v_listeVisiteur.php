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
				<option value="<?php echo $idUtilisateur?>"> <?php echo $nomUtilisateur." ".$prenomUtilisateur ?> </option>
				<?php
					}
				?>
				</select>
			</p>
			<p>
				<label class="titre">Mois :</label> <input class="zone" type="text" name="mois" size="12" />
				</br></br>
				<label class="titre">Année :</label> <input class="zone" type="text" name="annee" size="12" />
				</br></br>
				<input id="ok" type="submit" value="Valider" size="20" />
				<input id="annuler" type="reset" value="Effacer" size="20" />
			</p> 
		</div>

		
	</form>