<?php 
require_once 'head.php';
require_once 'povezava.php';
include_once 'session.php';
?>


<?php
$pesem=$_POST['podlaga'];
$sql="DELETE from skladbe WHERE id='$pesem' ";
mysqli_query($link,$sql);

header("Refresh:3 url=izbrisi2.php");
echo '<p>Uspesno ste izbrisali pesem</p>';

?>