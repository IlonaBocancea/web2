<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM Produse WHERE Denumire = {$_GET['Denumire']}" )) {
        echo 'Succes';
    } else {
       echo 'Eroare';
    }
}

$result = mysqli_query($connection, "SELECT * FROM Produse");
?>
<table border="2">
<? while($Produse = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $Produse['Denumire']?></td>
	<td><?= $Produse['Pret']?></td>
	<td><?= $Produse['Categorie']?></td>
</tr>
<?}?>