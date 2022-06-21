<?php
require_once 'povezava.php';
include_once 'session.php';
require_once 'head.php';

$ime= $_POST['ime-izvajalca']; //tule dobis ime izvajalca od forma v $ime postas podatke oz ime-izvajalca

    $sql = "SELECT * FROM izvajalci WHERE (ime='$ime');"; 
    $result = mysqli_query($link, $sql); //pridobiti podatke iz tabele.
    $preverjanje = mysqli_num_rows($result); //vrze nazaj tocno en row
    //zdaj bomo preverili če album že obstaja in če nebo obstajal ga bomo insertali v tabelo

        if($preverjanje>0)
    {
        header("Refresh:3 url=dodaj3.php");
        echo '<p>Izvajalec z imenom '.$ime. '&nbsp že obstaja. Vnesite drugo ime</p>';
    }

    if($preverjanje==0){
        $sql1="INSERT INTO izvajalci (ime, datum_zacetka)
        VALUES ('$ime',NULL)";
        $result2 = mysqli_query($link,$sql1) or die(mysqli_error($link)); //v $rezultatu izvrsis  $sql1 v svoji databazi       or die poeni da ne dela 

    header("Refresh:3 url=dodaj3.php");
   
    echo '<p>Bravo. Uspešno ste vstavili novega izvajalca  z imenom '.$ime.'</p>';
}
?>
    