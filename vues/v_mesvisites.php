<?php
	echo "<body>
				<h3>Consulter mes Visites </h3>
<form method='POST' action='index.php?uc=gererVisite&action=renduVisite'>
<table class='tabNonQuadrille'>

<form>
	<p>
		<label for='visites'> Mes visites : </label>
		<select name='visite' id='visites'>
			<option value='test'>test
			<option value='essai'>essai
			</option>
		</select>
	</p>
<p>
		<label for='mois'> Mois : </label>
		<select name='visite' id='visites'>
			<option value='test'>test
			<option value='essai'>essai
			</option>
		</select>
</p>



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

