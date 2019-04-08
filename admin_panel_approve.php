<?php 
session_start();
$con=mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
if(isset($_GET['username'])!=1)
{
    $message="Login Again, Session expired";
    echo "<script type='text/javascript'>alert('$message'); "
            . "window.location.href='admin.php'</script>";
}
else
{
    $abc=$_GET['username'];
    $result = mysqli_query($con,"update register set `Access`='1' where `Email ID` like '$abc' ");  
     echo "<script type='text/javascript'>alert('Access Provided!'); "
            . "window.location.href='admin_panel.php'</script>";
}
?>