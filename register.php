<?php include 'head.php'
?>
    <body>
    
         <div class="RegisterWrap">

        <form action="preverireg.php" method="post"></br>
            <input type="text" placeholder="Ime" name="ime" required></br>
            <input type="text" placeholder="Priimek" name="priimek" required></br>
            <input type="number" placeholder="telefon" name="telefon" required></br>
            <input type="email" placeholder="mail" name="mail" required></br>
            <input type="password" placeholder="geslo" name="geslo" required></br>
            <button type="submit"class="RegisterWrapSubmit">Prijava</button>
        </form>
    </div>
    
    </body>
    
<?php include 'foot.php'?>