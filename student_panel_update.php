<?php 
session_start();
$con=mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
if(isset($_SESSION['username'])!=1)
{
    $message="Login Again, Session expired";
    echo "<script type='text/javascript'>alert('$message'); "
            . "window.location.href='student.php'</script>";
}
else
{
     $fn=$_POST['myvalue'];
     $ln=$_POST['myvalue1'];
     $dob=$_POST['myvalue2'];
     $age=$_POST['myvalue3'];
     $pname=$_POST['myvalue4'];
     $id=$_POST['myvalue5'];
     $reg=$_POST['myvalue6'];
     $roll=$_POST['myvalue7'];
     $mob=$_POST['myvalue8'];
     $gen=$_POST['myvalue9'];
     $dept=$_POST['myvalue10'];
     $prim=$_POST['myvalue11'];
     $city=$_POST['myvalue12'];
     $state=$_POST['myvalue13'];
     $twe=$_POST['myvalue14'];
     $ten=$_POST['myvalue15'];
     $cgpa=$_POST['myvalue16'];
     $psw1=$_POST['psw'];
     $abc=$_SESSION['username'];
     $result = mysqli_query($con,"update register set `Password`='$psw1',`First Name`='$fn',`Last Name`='$ln',`DOB`='$dob',`Age`='$age',`Parent Name`='$pname',`Mobile No`='$mob',`Gender`='$gen',`Dept`='$dept',`Primary Address`='$prim',`City`='$city',`State`='$state',`12 %age`='$twe',`10 %age`='$ten',`CGPA`='$cgpa',`Access`='$0' where `Email ID` like '$abc' ");  
     echo "<script type='text/javascript'>alert('Updated database, wait for admin to give access!'); "
            . "window.location.href='student.php'</script>";
}
?>