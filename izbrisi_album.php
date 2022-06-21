<?php 
require_once 'head.php';
require_once 'povezava.php';
include_once 'session.php';
?>

<?php
$album=$_POST['graficna'];
$sql="DELETE from skladbe WHERE id_album=$album;";
mysqli_query($link,$sql);

$sql="DELETE from albumi WHERE id=$album;";
mysqli_query($link,$sql);

header("Refresh:3 url=izbrisi1php");
echo '<p>Uspesno ste izbrisali album</p>';
?>
