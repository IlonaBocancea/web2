<? 
	$connection = mysqli_connect("localhost", "root", "", "Magazin");
	if (!$connection) {
	    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$result = mysqli_query($connection, "SELECT * FROM Categorii");
	
	
?>
<!doctype html>
<html>
<head></head>
<body>
	<table border="1">
	<? while($Categorii = mysqli_fetch_assoc($result)){?>
	<tr>
		<td><?= $Categorii['Denumire']?></td>
	</tr>
	<? }?>
</table>
</body>
</html>