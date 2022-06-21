<?php 
require_once 'povezava.php';
include_once 'session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="register.css" rel="stylesheet">
        <link href="login.css" rel="stylesheet">
        <link href="izbira.css" rel="stylesheet">
        <link href="albumi.css" rel= "stylesheet">
        <link href="head.css" rel="stylesheet">
        <link href="foot.css" rel="stylesheet">
        <link href="viri.css" rel="stylesheet">  
              
        <title>2022 Music Player</title>
    </head>

    <body>
        <div class="head">
        <a href="izbira.php">Home</a>
        
    <?php
    if(isset($_SESSION['prijavlen'])&& $_SESSION['prijavlen'] == 1) //isset seasion preveri ce je NOT NULl 
    {
        echo'<a class="odjava" href="loggout.php">Odjava</a>';
    
        if($_SESSION['admin']== 1)            //preveri ce ma admin 1 ce nima pa je uporabnik
        {
                
        }
    }
        else{
            echo '<a href="login.php">Prijava</a>';
            echo '<a href="register.php" >Registracija</a>';

            $_SESSION['admin']= 0; 
        }

    ?>
        </div>
        