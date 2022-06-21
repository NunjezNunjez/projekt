
<?php 
 include 'head.php';
 include_once 'session.php';
 require_once 'povezava.php';
 ?>
    <div class="RegisterWrap1">
    <h1>Vstavi novega izvajalca</h1>

<form action="vstavljanje-izvajalcev.php" method="POST" name="form3">
Ime izvajalca:<input  class="input" type="text" name="ime-izvajalca" placeholder="Vnesi ime izvajalca" > <br>

<button type="submit" class="RegisterWrapSubmit1"> Vstavi Izvajalca </button>  
</form>
</div>

 