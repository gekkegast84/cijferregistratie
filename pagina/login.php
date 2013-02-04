<h1>Login</h1><br/><br/>
<form action='index.php?content=pagina/login' method='post'>	
	<table>
		<tr>
			<td>Gebruikersnaam</td>
			<td><input tabindex='1' type='text' name='gebruikersnaam' id='gebruikersnaam'  maxlength="50" /></td>
		</tr>
		<tr>
			<td>Wachtwoord</td>
			<td><input tabindex='2' type='password' name='wachtwoord' id='wachtwoord'  maxlength="50" /></td>
			 
		</tr>
		<tr>
			<td><input tabindex='3' type='submit' value='Login' name='submit' id='submit'/></td>
		</tr>
	</table>
	<a href='index.php?content=forgot_pw'><code>Wachtwoord vergeten?</code></a>
</form>

<?php
include('class/login_class.php');

if ( isset ( $_POST['submit'] ) )
{
	echo"inlogsysteem nog schrijven.";
}