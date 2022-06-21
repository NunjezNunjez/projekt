<?php 
 include 'head.php';
 include_once 'session.php';
 require_once 'povezava.php';
 ?>
    <div class="RegisterWrap1">
    <h1>Vstavi novo pesem</h1>

<form action="vstavljanje-pesmi.php" method="POST" name="form2" enctype='multipart/form-data'>   <!-- To je za uplodanje slike -->
Ime pesmi:<input  class="input" type="text" name="ime-pesmi" placeholder="Vnesi ime pesmi" > <br>
Album:<select  id="loca2" name="tipkovnica" ><?php 
$query=mysqli_query($link,"SELECT * FROM albumi;");   //spremenljivka querri

while($row=mysqli_fetch_array($query))                //ce dobi iz spremenljivke nek rezultat se bo izpisal
{
    echo '<option value="'.$row['id'].'">'.$row ['ime'].'</option>'; 
}
?>
</select> <br>

Izvajalec:<select  id="loca3" name="monitor" ><?php 
$query1=mysqli_query($link,"SELECT * FROM izvajalci;");   //spremenljivka querri querri je proizvedba
while($row1=mysqli_fetch_array($query1))    //msqli fetch array pregleda ce querry vnre nazaj         //ce dobi iz spremenljivke nek rezultat se bo izpisal
{
    echo '<option value="'.$row1['id'].'">'.$row1['ime'].'</option>'; 
}
?>
</select>

    <input type='file' name='mp3_file'></input> 
    <button type="submit" class="RegisterWrapSubmit1"> Vstavi Pesem </button>
   
</form>
</div>

 