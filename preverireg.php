<?php 
require_once 'povezava.php';
require 'head.php';

$data = $_POST;                            
$uporabnik_ime = $_POST ['ime'];
$uporabnik_priimek = $_POST ['priimek'];
$uporabnik_mail =$_POST['mail'];                 //spremenlivke iz databaza poberes ime,priimek...
$uporabnik_geslo = $_POST ['geslo'];
$uporabnik_telefon = $_POST ['telefon'];


    $preverimail= 0;
    $sql= "SELECT * FROM  uporabniki  WHERE (mail= '$uporabnik_mail');";    //sql stavek preveri ce je email ze v uporabi 

    $rezultat = mysqli_query($link,$sql);           // V tej spremenljivki se v bazi nardi poizvedva tega stavka 

    $a = mysqli_num_rows($rezultat);              // shrani se v spremenjivko

    if($a==1)                       //preveri ce je ze v uporabi 
    {
        echo '<p>Email ze obstaja </p>';     //ce je email ze obstaja 
        $preverimail == 1;                        
        header("refresh:3 url= register.php");    //Vrglo te bo nazaj na register z upozorili
    }

    else 
    {
    
        $geslo = sha1($uporabnik_geslo); //sha1= shifrirannje gesla
        $sql = "INSERT INTO uporabniki (ime, priimek, mail, geslo, telefon) VALUES ('$uporabnik_ime', '$uporabnik_priimek', '$uporabnik_mail', '$geslo', '$uporabnik_telefon');";

    mysqli_query($link, $sql)or die(mysqli_error($link));
    header("location: login.php?uspesno");

    }
 

    ?>




