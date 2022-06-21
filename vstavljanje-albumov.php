<?php
require_once 'povezava.php';
include_once 'session.php';
require_once 'head.php';

$ime= $_POST['ime-albuma']; //tule dobis ime albuma od forma
$zaner= $_POST['miska'];



    $sql = "SELECT * FROM albumi WHERE (ime='$ime');"; 
    $result = mysqli_query($link, $sql); //pridobiti podatke iz tabele.
    $preverjanje = mysqli_num_rows($result); 

    //zdaj bomo preverili če album že obstaja in če nebo obstajal ga bomo insertali v tabelo

    if($preverjanje>0)
    {
        header("Refresh:3 url=dodaj1.php");
        echo '<p>Album z naslovom '.$ime. '&nbsp že obstaja. Vnesite drugo ime</p>';
    }

    if($preverjanje==0){
        $sql1="INSERT INTO albumi (ime,leto_nastanka,st_skladb,opis,id_slika, id_zanri)
        VALUES ('$ime',NULL,NULL,NULL,NULL,(SELECT id FROM zanri WHERE id='$zaner'))";
        $result2 = mysqli_query($link,$sql1) or die(mysqli_error($link));

    header("Refresh:3 url=dodaj1.php");
    echo '<p>Bravo. Uspešno ste vstavili nov album z imenom '.$ime.'</p>'; 
}
?>
    