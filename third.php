<?php
    session_start();
 echo " HI " . $_SESSION["username"]." ";
        
 echo "<a href='page4.php'><button type='button'>LOGOUT</button></a>";
?>