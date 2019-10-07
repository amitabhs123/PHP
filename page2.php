<?php
if(empty($_POST["username"]) && empty($_POST["password"]))
    {
        echo "Invalid username and password";
    }
else
    {
    $conn = mysqli_connect("localhost","root","","dac");
    $result = mysqli_query($conn, "SELECT * FROM login_detail WHERE Username= '".$_POST["username"]."' and Password= '".$_POST["password"]."'");
    $count= mysqli_num_rows($result);
    if($count==0)
    {
        echo "Invalid username and Password";
    }
 else {
        session_start();
        $_SESSION["username"] = $_POST["username"];
        header("location: third.php");
    }
    }

?>
