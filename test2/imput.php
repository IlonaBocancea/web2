<!DOCTYPE html>
<html>
<head>
</head>
    <body>

	<? 
	include 'menu.php'?>
	
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Valori numerice: <input type="text" name="numar"/>
<input type="submit">
</form>
	

<?
if( !empty($_POST) ) {
	
	print_r($_POST);
}
?>


</body>
</html>

