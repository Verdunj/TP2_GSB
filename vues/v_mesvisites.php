<?php
	echo "<body>
				<h3>Consulter mes Visites </h3>
<form method='POST' action='index.php?uc=gererVisite&action=renduVisite'>
<table class='tabNonQuadrille'>

<tr>
	<td>Visiteur : </td>
	<td>
		<input  type='text' name='refPraticien'  size='25' maxlength='100'>
	</td>
</tr>
<tr>
	<td>Mois : </td>
	<td>
		<input type='text' name='niveauInteret' size='30' min='1' max='5' maxlength='1'>
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

