<?php 
require_once 'povezava.php';
require 'head.php';

$mail = $_POST['mail'];            //dodas spremenljivki
$geslo = $_POST['geslo'];

    $uporabnik_geslo= sha1($geslo);           //Sifrira geslo da ce kdo udre u bazo da ga nemore prepoznat

 
    $sql = "SELECT * FROM uporabniki WHERE mail = '$mail' AND  geslo ='$uporabnik_geslo'; ";       //sql stavek kjer preveri ce je blo uneseno mail in geslo enako 
    $rezultat = mysqli_query( $link , $sql);   //shrani se v rezultat

    $b= mysqli_num_rows($rezultat);      //shrani se v novo spremenjivko kjer pregleda vrstico

if ($b== 1)                                          //preveri  ce je bla prijava uspesna
{
    $row = mysqli_fetch_array($rezultat);
    $_SESSION ['ime'] =  $row ['ime'];
    $_SESSION ['priimek'] =  $row ['priimek'];            //session  ko se zacne seja se shrani v row podatek
    $_SESSION ['mail'] =  $row ['mail'];
    $_SESSION ['geslo'] =  $row ['geslo'];           
    $_SESSION ['telefon'] =  $row ['telefon'];
    $_SESSION ['admin'] =  $row ['admin']; 
    $_SESSION ['prijavlen']= 1;     //to pomeni ce obstaja mu das neko spremenljivko 1 ki bo preverjala ali je prijazla

    header("refresh:3 url= izbira.php");
    echo '<p> Pozdravljen '.$_SESSION['ime'].' </p>';    //ce dela izpise
}
    else
    {
     echo '<p> Niste upisali pravilnega gesla ali emaila </p>';
     header("refresh:3 url = login.php");
    }
?>