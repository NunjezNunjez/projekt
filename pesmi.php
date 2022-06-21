<?php include 'head.php';
include_once 'session.php';
?>

<?php
$album_id = $_GET['id'];

$sql="SELECT * FROM skladbe WHERE id_album='$album_id';";
$result=mysqli_query($link,$sql);   
while($row=mysqli_fetch_array($result))       //fetch arrray nardi nov niz ukazov v bazi
 { 
    echo'<figure>';           
    echo '<figcaption>'. $row['naslov_skladbe'].' </figcaption>';      
    echo '<audio controls src="'.$row['mp3'].'">';                     
 
           echo' Your browser does not support the';
          echo'  <code>audio</code> element.';
    echo '  </audio>';
    echo '</figure>';
 }
?>
