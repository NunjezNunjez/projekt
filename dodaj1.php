<?php 
 include 'head.php';
 include_once 'session.php';
 require_once 'povezava.php';
 ?>

    <div class="RegisterWrap1">
    <h1>Vstavi nov album</h1>

<form action="vstavljanje-albumov.php" method="POST" name="form1">

Ime albuma:<input  class="input" type="text" name="ime-albuma" placeholder="Vnesi ime albuma" > <br>

zanr:<select  id="loca" name="miska" >
<?php 
$query=mysqli_query($link,"SELECT * FROM zanri;"); 
while($row=mysqli_fetch_array($query))                                //fetcharray nardi nov niz ukazov v bazi
{
    echo '<option value="'.$row['id'].'">'.$row ['ime'].'</option>'; 
}
?>
</select>
<button type="submit" class="RegisterWrapSubmit1"> Vstavi album </button>
   
</form>
</div>

 