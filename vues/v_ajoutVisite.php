<?php
	echo "<body>
				<h3>Ajouter un nouveau compte-rendu </h3>
<form method='POST' action='index.php?uc=gererVisite&action=renduVisite'>
<table class='tabNonQuadrille'>

<tr>
	<td>Nom du praticien</td>
	<td>"?>
<?php
				echo'<label for="nomV" style="color:#B01919;">Qui ? : </label>';
				echo'<select name="nomV" id="idVisiteur">';
				$bdd = new PDO('mysql:host=localhost;dbname=gsb_frais2;charset=utf8', 'admin', 'admin');
				$reponse1 = $bdd->query('SELECT * FROM Praticien');
					while ($donnees = $reponse1->fetch())
						{
							$idP = $donnees['idPraticien'];
							$nom = $donnees['nom'];
							echo"<option value='",$idP ,"'", ">" , $nom,"</option>";
						}
					echo"</select>";
					$reponse1->closeCursor();?>
	</td>
</tr>
<tr>
	<td>Niveau d'interet</td>
	<td>
		<input type='number' name='niveauInteret' size='30' min='1' max='5' maxlength='1'>
	</td>
</tr>



<tr>
	<td>
		<input type='submit' value='Valider' name='valider'>
	</td>
</tr>
<tr>
	<td>
         <input type='reset' value='Annuler' name='annuler'>
	</td>
</tr>

</form>";

