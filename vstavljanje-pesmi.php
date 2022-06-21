<?php
require_once 'povezava.php';
include_once 'session.php';
require_once 'head.php';

$naslov_skladbe= $_POST['ime-pesmi']; //tule dobis ime pesmi od forma
$albumek= $_POST['tipkovnica'];
//-----------------------------------------------

$file = $_FILES['mp3_file']; //dobimo vse podatke od izbrane pesmi preko $_FILE
$fileName = $file['name']; //ime paesmi
$fileTmpName = $file['tmp_name']; //samo določi začasno lokacijo pesmi
$fileSize = $file['size']; //velikost pesmi oz. datoteke
$fileError = $file['error']; //eroorji če sploh so...
$fileType = $file['type']; //vrsta


$fileExt = explode('.', $fileName); //pridobi končnico datoteke (naprimer .mp3) |  primer: $fileExt = .mp3

$fileActualExtension = strtolower(end($fileExt)); //pretvori $fileExt v spodnje črke ce bi končnica slučajno bila .MP3, end() uzame samo MP3 | primer: .MP3 --> mp3
$allowed = array('mp3'); //mamo array dovoljenih končnic za datoteko, v našem primeru samo mp3

if (in_array($fileActualExtension, $allowed)) { //preveri če je objavljena pesem (mp3) dovoljena
    if ($fileError === 0) { //pogleda če je kak error
        if ($fileSize < 10000000) { //max velikost 10mb
            $fileNameNew = $fileName; //končno ime pesmi je ime pesmi ki smo jo naložili
           
            $fileDestination = 'music/' . $fileNameNew; //sharnimo pot pesmi v $fileDestination da bomo lahko potem shranili pravilno pot v databazo | primer: music/imepesmi.mp3
            
            move_uploaded_file($fileTmpName, $fileDestination); //sliko prestavimo, ker začasna lokacija ni pravilna...
            
            $fileDestinationDatabase = 'music/' . $fileNameNew; //updatamo se databazo... spremenljivka | primer: music/imepesmi.mp3 

            insertMp3($link, $fileDestinationDatabase, $naslov_skladbe, $albumek); //pokličemo funkcijo ki je napisana spodaj...

            header("location: dodaj2.php?error=mp3UploadSuccess");
        } else {
            header("location: dodaj2.php?error=FileTooBig");
        }
    } else {
        header("location: dodaj2.php?error=FileUploadError");
    }
} else {
    header("location: dodaj2.php?error=FileNotSupported");
}


//-----------------------------------------------
function insertMp3($link, $fileDestinationDatabase, $naslov_skladbe, $albumek) {
    $sql = "SELECT * FROM skladbe WHERE (naslov_skladbe='$naslov_skladbe');"; 
    $result = mysqli_query($link, $sql);
    $preverjanje = mysqli_num_rows($result);
    //zdaj bomo preverili če album že obstaja in če nebo obstajal ga bomo insertali v tabelo

    

    if($preverjanje>0)
    {
        header("Refresh:3 url=dodaj2.php");
        echo '<p>Pesem z naslovom '.$naslov_skladbe. '&nbsp že obstaja. Vnesite drugo ime</p>';
    }

    if($preverjanje==0){
        $sql1="INSERT INTO skladbe (naslov_skladbe,leto_izvoda,id_album,mp3)
        VALUES ('$naslov_skladbe',NULL,(SELECT id FROM albumi WHERE id='$albumek'),'$fileDestinationDatabase')";

        echo "<br>";
        echo "naslov_skladbe: ".$naslov_skladbe;
        echo "<br>";
        echo "albumek: ".$albumek;
        echo "<br>";
        echo "fileDestinationDatabase: ".$fileDestinationDatabase;
        echo "<br>";
        $result2 = mysqli_query($link,$sql1) or die(mysqli_error($link));
        

        header("Refresh:3 url=dodaj2.php");
    
        echo '<p>Bravo. Uspešno ste vstavili novo pesem  z imenom '.$fileDestinationDatabase.'</p>';
    
    }   
}
?>
    