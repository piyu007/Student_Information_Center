<?php
session_start();
$con=mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
if(isset($_SESSION['username'])!=1)
{
    $message="Login Again, Session expired";
    echo "<script type='text/javascript'>alert('$message'); "
            . "window.location.href='admin.php'</script>";
}
else
{
    $result = mysqli_query($con,"select * from register  ");
    $n=  mysqli_num_rows($result);
   $i = 0;
      $arr = array();
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        if($field!='Password' and $field!='image' and $field!='Primary Address' and $field!='City' and $field!='State')
        {$arr[$i][]=$value; // I just did not use "htmlspecialchars()" function. 
    }
}
$i++;
}
}
?>
<html>
    <head>
        <style>
            body{
                background-repeat: no-repeat;
                background-size: 100% ;
                background-color: #cccccc;
            }
            
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #gray;
}
table#t01 tr:nth-child(odd) {
 background-color: #gray;
}
table#t01 th {
  background-color: gray;
  color: white;
}
          h1 {
    font-size: 45px;
    background-color: gray;
    color: white;
    text-align: center;
    width: 1800px;
}  
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width: 1800px;
  
}

li {
  float: right;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
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
        <title>Admin Panel</title>
    </head>
    <body>
        <section class="container content" >
            <h1 class="wide" style="text-align:center">Welcome to Admin Panel</h1>
             <ul>
        

<li style="float:left"><a href="logoutadmin.php"   >Logout</a></li>
  <li style="float:left"><a id="demo"></li>

<script>
     history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</ul>
            
         
            <form method="POST">
                <table id="t01">
  <tr>
    <th>First Name</th>
    <th>Last Name</th> 
    <th>DOB</th>
    <th>Age</th>
    <th>Parent Name</th>
    <th>Email</th>
    <th>Reg No</th>
    <th>Roll No</th>
    <th>Mobile No</th>
    <th>Gender</th>
    <th>Department</th>
    <th>12 %age</th>
    <th>10 %age</th>
    <th>CGPA</th>
    <th>Access</th>
    <th>Update</th>
    <th>Approve</th>
    <th>Disapprove</th>
    <th>Delete</th>
  </tr><?php
  echo "<br>";
for ($j=0; $j<$i;$j++) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    for($k=0;$k<15;$k++) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $arr[$j][$k] . "</td>"; // I just did not use "htmlspecialchars()" function.    
    }
    ?>
  <Td><a href="admin_panel_update.php?username=<?php echo $arr[$j][5]?>">Update</a></td>
  <Td><a href="admin_panel_approve.php?username=<?php echo $arr[$j][5]?>">Approve</a></td>
  <Td><a href="admin_panel_disapprove.php?username=<?php echo $arr[$j][5]?>">Disapprove</a></td>
  <Td><a href="admin_panel_delete.php?username=<?php echo $arr[$j][5]?>">Delete</a></td>
  <?php
  
    echo "</tr>";
}
?>
            </form>
</section>
    </body>
</html>