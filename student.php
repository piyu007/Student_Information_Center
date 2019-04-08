<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
     
     $result = mysqli_query($con,"select Access from register where `Email ID` like '$username' and `Password` like '$password' "); // run the query and assign the result to $result 
     $table1 = mysqli_fetch_array($result); 
     if($table1[0]==1)
         {
           $_SESSION['username'] = $username;
        header('Location: student_panel1.php');
    exit();
     }
     else {
          $result1 = mysqli_query($con,"select Age from register where `Email ID` like '$username' and `Password` like '$password' "); // run the query and assign the result to $result 
    $table1 = mysqli_fetch_array($result1); 
     if($table1[0]>=1)
         {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You have registered but the access has not been provided by the admin')
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
       else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong Username and Password combination')
        window.location.href='student.php'
        </SCRIPT>");
    exit();
     }
     }// go through each row that was returned in $result
}

?>
<html >
    <head>
        <style>
            body{
                background-image: url("i.jpg");
                background-repeat: no-repeat;
                background-size: 100% ;
                background-color: #cccccc;
            }
          h1 {
    font-size: 45px;
    background-color: gray;
    color: white;
    text-align: center;
}  
table{
  font-family: Calibri; 
  color:black; 
  font-size: 13pt; 
  font-style: normal;
  font-weight: bold;
  background-color: graytext;  
  border: 3px solid black
}
table.inner{
  border: 0px
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}


footer {
  position: absolute;
  bottom: 0px;
  text-align: center;
  width: 100%;
  height: 60px;
  background-color: #111;
  color: white;
}
        </style>
        <meta charset="UTF-8">
        <title>Student Login</title>
    </head>
    <body>
        <section class="container content" >
            <h1 class="wide" style="text-align:center">Welcome to Student Login</h1>
             <ul>
            <li><a class="active" href="index.php">Home</a></li>

  <li><a href="about.php">About</a></li>
  
  <li style="float:right"><a href="form1.php" >Register</a></li>
  <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    
    <div class="dropdown-content">
        <a href="student.php">Student</a>
      <a href="admin.php">Admin</a>
    </div>
  </li>
  <li style="float:right"><a id="demo"></li>

<script>
   
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</ul>
         
            
            <form method="post" action="student.php" style="text-align: center" >
                <table align="center" cellpadding = "10">
                    <tr><td>E-mail ID:</TD></tr><br>
                    <tr><TD><input type="text" name="uname"></TD></tr>

<tr><TD>Password:</TD></tr>
<tr><tD><input type="password" name="pass"></TD></tr>
<tr><TD>
<input type="submit" name="submit" value="Submit">
    </td>       </tr>
                </table>  
                
</form>
</section>
        <footer>Developed by:
               <p>
                   1. Suvrojoti Paul 2. Piyush Mantri 3. Sanaulla Ansari
               </p>
           </footer>
    </body>
</html>

