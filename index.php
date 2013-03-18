<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="Content-Language" content="fr" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Essai de GIT</title>
</head>

<body >
<?php
if (isset($_POST['entree']))
{
	$entree=$_POST['entree'];
	print("<p>******** $entree ************</p>");
	
?>
<form action="" method="post">
Une valeur à saisir<input type="text" name="entree">
<input type="submit" value="soumettre">
<h2> voici la première modification faite par moi</h2>
<h2> Première modification faite à Saint Rémi</h2>
</form>
</body>
</html>
