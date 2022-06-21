<?php 
require_once 'head.php';
require_once 'povezava.php';
include_once 'session.php';
?>
    <div class="RegisterWrap1">
    <h1>Izbrisi pesem</h1>

<form action="izbrisi_pesem.php" method="POST" name="form4">

pesem:<select  id="loca46" name="podlaga" >
    <?php 
        $query=mysqli_query($link,"SELECT * FROM skladbe;"); 
        $row1=mysqli_fetch_array($query);
        while($row=mysqli_fetch_array($query))   //fetcharray nardi nov niz ukazov v bazi
        {
    echo '<option value="'.$row['id'].'">'.$row ['naslov_skladbe'].'</option>';  
        }
    //$_SESSION['pesem'] = $row1['id'];
    ?>
    </select>

<button type="submit" class="RegisterWrapSubmit1"> Izbrisi pesem </button>
   
</form>
</div>

 
