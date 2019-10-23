<!DOCTYPE html>
<html>
<head>
</head>
    <body>

	<? 
	include 'menu.php'?>
	
<form action="" method="post">
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

