<?php 
include 'head.php';
include_once 'session.php';
?>

<?php
//izbira.php Prvi IN drugi sql stavek dobis id= ime-HIPHOP ali Rock  in se shranani v spremenljivko  tuki v $idz jo pac getas
$idz=$_GET['id']; //$idz dobi podatke kateri id je
$sql="SELECT a.* from albumi a INNER JOIN zanri z ON z.id=a.id_zanri WHERE z.id=$idz   ORDER BY a.id DESC;"; //preverja iz kerga zanra so albumi
$result=mysqli_query($link,$sql);

// Tuki ce nisi loginan te vrze nazaj na login
require_once('povezava.php');
if(!isset($_SESSION['mail'])){   //ce v sesonu ni logina te vrze na mail
    header('Location:login.php');    //ce ni session mail ti kaze logim pomeni da se mors loginat 
}

else{ 
    echo '<table class="albumi"> <tr>';  //ce je prijavljen pa se ti prikazejo albumi 

while($row=mysqli_fetch_array($result)) //ta id k  se dobi ga da v link psemi.php?id=... 
    {
    echo '<td><a href="pesmi.php?id='.$row['id'].'&zvrst=hip-hop"><img src="rock\no-image.jpg"  width="200" height="200"></a><p> '.$row['ime'].'</p> </td>';  
    }
  echo '</tr>';
  echo '</table>'; 
    }

?>








