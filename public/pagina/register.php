<script type='text/javascript'>
$('#menu li.registreren a').removeClass('unselected').addClass('selected');
</script>

<h1>Registreren</h1><br/><br/>
<form action='index.php?content=pagina/register' method='post'>	
	<table>
	<tr><td>
		<table>
			<tr>
				<td>Voornaam</td>
				<td><input tabindex='1' type='text' name='voornaam' id='voornaam' placeholder="verplicht"/></td>
			</tr>
			<tr>
				<td>Tussenvoegsel</td>
				<td><input tabindex='2' type='text' name='tussenvoegsel' id='tussenvoegsel' /></td>
			</tr>
			<tr>
				<td>Achternaam</td>
				<td><input tabindex='3' type='text' name='achternaam' id='achternaam' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Roepnaam</td>
				<td><input tabindex='4' type='text' name='roepnaam' id='roepnaam' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Geboortedatum</td>
				<td><input tabindex='5' type='text' name='geboortedatum' id='geboortedatum' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input tabindex='6' type='text' name='foto' id='foto' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Klas</td>
				<td><input tabindex='7' type='text' name='klas' id='klas' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Mentor</td>
				<td><input tabindex='8' type='text' name='mentor' id='mentor' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Cohort</td>
				<td><input tabindex='9' type='text' name='cohort' id='cohort' ></td>
			</tr>		
			<tr>
				<td>Studierichting</td>
				<td><input tabindex='10' type='text' name='studierichting' id='studierichting' placeholder="verplicht" ></td>
			</tr>
			<tr><td colspan='2'>&nbsp;</td></tr><tr><td colspan='2'>&nbsp;</td></tr><tr><td colspan='2'>&nbsp;</td></tr><tr><td colspan='2'>&nbsp;</td></tr>
			<tr>
				<td>Woonplaats</td>
				<td><input tabindex='11' type='text' name='woonplaats' id='woonplaats' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Postcode</td>
				<td><input tabindex='12' type='text' name='postcode' id='postcode' placeholder="verplicht" /></td>		
			</tr>
			<tr>
				<td>Straatnaam</td>
				<td><input tabindex='12' type='text' name='straatnaam' id='straatnaam' placeholder="verplicht" /></td>		
			</tr>
			<tr>
				<td>Huisnummer</td>
				<td><input tabindex='12' type='text' name='huisnummer' id='huisnummer' placeholder="verplicht" /></td>		
			</tr>
			<tr>
				<td>Telefoonnummer</td>
				<td><input tabindex='12' type='text' name='telefoonnummer' id='telefoonnummer' placeholder="verplicht" /></td>		
			</tr>	
			<tr>
				<td>Mobielnummer</td>
				<td><input tabindex='12' type='text' name='mobielnummer' id='mobielnummer' /></td>		
			</tr>
			<tr>
				<td>Leerlingnummer</td>
				<td><input tabindex='13' type='text' name='leerlingnummer' id='leerlingnummer' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Geslacht</td>
				<td>
				<select tabindex='13' type='text' name='geslacht' id='geslacht' placeholder="verplicht" >
					<option value='man' > man </option>
					<option value='vrouw' > vrouw </option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Leeftijd</td>
				<td><input tabindex='13' type='text' name='leeftijd' id='leeftijd' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Emailadres</td>
				<td><input tabindex='14' type='text' name='emailadres' id='emailadres' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td>Nationaliteit</td>
				<td><input tabindex='15' type='text' name='nationaliteit' id='nationaliteit' placeholder="verplicht" /></td>
			</tr>
			<tr>
				<td><input tabindex='12' type='submit' value='registreren' name='submit' id='submit'/></td>
			</tr>
	</table>
</form>

<?php
if ( isset ( $_POST['submit'] ) )
{
	echo"inlogsysteem nog schrijven.";
}