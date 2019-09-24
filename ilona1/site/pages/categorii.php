<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM Categorii WHERE Denumire = {$_GET['Denumire']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}

$result = mysqli_query($connection, "SELECT * FROM Categorii");
?>
<table border="1">
<? while($Categorii = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $Categorii['Denumire']?></td>
</tr>
<? }?>
