<?php
session_start();
$con=mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    if (!$_POST['uname'] | !$_POST['pass'])
    {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='admin.php'
        </SCRIPT>");
    exit();
     }
     $result = mysqli_query($con,"select id from admin_login where  username LIKE '$username' and password LIKE '$password' "); // run the query and assign the result to $result 
     
     $table = mysqli_fetch_array($result); 
     if($table[0]>=1)
         {
         $_SESSION['username']=$username;
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='admin_panel.php'
        </SCRIPT>");
    exit();
     }
     else {
         {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong Username and Password combination')
        window.location.href='admin.php'
        </SCRIPT>");
    exit();
     }
     // go through each row that was returned in $result
}
}

?>