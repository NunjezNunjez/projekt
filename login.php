<?php include 'head.php'
?>
    <body>
    
        <div class="LoginWrap">
        <form action="preverilog.php" method="post"></br>
        
            <input type="email" placeholder="mail" name="mail" required></br>
            <input type="password" placeholder="geslo" name="geslo" required></br>
            <button type="submit" class="LoginWrapSubmit">Login</button>
        </form>

        <p class=h1> Niste še registrirani? </p>
        <a href = "register.php" >Registracija</a>
        </div>
    </body>

    <?php include 'foot.php'?>