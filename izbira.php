<?php 
include 'head.php';
include_once 'session.php';
?>

<body>
    <table>
    <?php 
    if ($_SESSION ['admin']==="1") {
     ?>

        <div class="center">
        <div class="IzbiraWrap">

                <?php 
                 $sql1="SELECT id FROM zanri WHERE ime='HIPHOP';";
                 $result1=mysqli_query($link,$sql1);
                 $row1=mysqli_fetch_array($result1);
                 $zanres=$row1['id']; //dobis podatke iz rezultata id dobis iz zanrov 
                 echo '<a href="albumi.php?id='.$zanres.'"><button>HIP-POP</button></a>';
                 ?>

                <?php 
                 $sql2="SELECT id FROM zanri WHERE ime='ROCK';";
                 $result2=mysqli_query($link,$sql2);
                 $row2=mysqli_fetch_array($result2);
                 $zanres1=$row2['id'];
                 echo '<a href="albumi.php?id='.$zanres1.'"><button>ROCK</button></a>';
                 ?>
        </div> <!--Za class IzbiraWrap-->

        <div id="dodaj_pos">

            <a href="dodaj1.php"><button>DODAJ ALBUM</button></a>
            <a href="dodaj2.php"><button> DODAJ PESEM </button> </a>
            <a href="dodaj3.php"><button> DODAJ IZVAJALCA</button> </a>
             
        </div>
        </div>  <!-- za class center -->

         <div id="dodaj_pos2">

            <a href="izbrisi1.php"><button class>IZBRISI ALBUM</button></a>
            <a href="izbrisi2.php"><button class>IZBRISI PESEM </button> </a>
            
             
        </div>
          <?php }
        //------------------------------------------------------------------------------ uporabnik dol
           else{  ?>

        <div class="center">
        <div class="IzbiraWrap"> 
 
        <?php 
                 $sql1="SELECT id FROM zanri WHERE ime='HIPHOP';";
                 $result1=mysqli_query($link,$sql1);
                 $row1=mysqli_fetch_array($result1);
                 $zanres=$row1['id'];
                 echo '<a href="albumi.php?id='.$zanres.'"><button class="button1">HIP-POP</button></a>';
        ?>

        <?php 
                 $sql2="SELECT id FROM zanri WHERE ime='ROCK';";
                 $result2=mysqli_query($link,$sql2);
                 $row2=mysqli_fetch_array($result2);
                 $zanres1=$row2['id'];
                 echo '<a href="albumi.php?id='.$zanres1.'"><button class="button2">ROCK</button></a>';
        ?>

         </div>   <!--Za class IzbiraWrap-->
         </div>   <!--Za center-->
 
         <?php 
            } ?>

    </table>
</body>
<?php 
include 'foot.php'
?>