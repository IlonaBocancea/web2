<!DOCTYPE html>
<html>
<head>
</head>
    <body>

	<? 
	include 'menu.php'?>
	
<form action="" method="post">
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

