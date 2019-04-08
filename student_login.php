<?php
$con=mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    if (!$_POST['uname'] | !$_POST['pass'])
    {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
     
     $result = mysqli_query($con,"select id from student_login where username like '$username' and password like '$password' "); // run the query and assign the result to $result 
     
     $table = mysqli_fetch_array($result); 
     if($table[0]>=1)
         {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Successful')
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
     else {
          $result1 = mysqli_query($con,"select id from register where `Email ID` like '$username' and `Password` like '$password' "); // run the query and assign the result to $result 
    $table1 = mysqli_fetch_array($result1); 
     if($table1[0]>=1)
         {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You have registered but the access has not been provided by the admin')
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
         {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong Username and Password combination')
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
     }// go through each row that was returned in $result
}

?>