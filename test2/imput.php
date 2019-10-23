<!DOCTYPE html>
<html>
<head>
</head>
    <body>

	<? include 'menu.php'?>
	
<form action="" method="get">
	Nume<input type="text" name="name"><br>
	E-mail<input type="text" name="email"><br>
	Valori numerice<input type="text" name="number">
	<input type="submit">
</form>

<?
if( !empty($_GET)) {
	print_r($_GET);
}
?>


</body>
</html>

