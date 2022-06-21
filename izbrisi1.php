<?php 
require_once 'head.php';
require_once 'povezava.php';
include_once 'session.php';
?>
    <div class="RegisterWrap1">
    <h1>Izbrisi Album</h1>

<form action="izbrisi_album.php" method="POST" name="form5">

album:<select  id="loca6" name="graficna" >
    <?php 
        $query=mysqli_query($link,"SELECT * FROM albumi;"); 
        $row1=mysqli_fetch_array($query);
        while($row=mysqli_fetch_array($query))   //fetcharray nardi nov niz ukazov v bazi
        {
            echo '<option value="'.$row['id'].'">'.$row ['ime'].'</option>';   
        }
        //$_SESSION['pesem'] = $row1['id'];
    ?>
    </select>

<button type="submit" class="RegisterWrapSubmit1"> Izbrisi album </button>
   
</form>
</div>
