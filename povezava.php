<?php
//
$host="localhost";
$user="root";
$password="";
$database="projekt-pesmi";
//povezava do strežnika
/*$link=mysqli_connect($host, $user, $password) or
        die("ne morem do strežnika");*/
//izbira baze
/*mysqli_select_db($link, $database) or
        die("ne morem do baze");*/


$link=mysqli_connect($host, $user, $password, $database) or 
        die("Povezava do baze ni uspela.");

//kodiranje znakov
mysqli_set_charset($link, "utf8");
