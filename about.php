<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
    
    <head>
        <style>
            
            body{
                background-image: url("i.jpg");
                background-repeat: no-repeat;
                background-size: 100% ;
                background-color: #cccccc;
                padding-bottom: 1px;
            }
h1 {
    font-size: 45px;
    background-color: grey;
    color: white;
    text-align: center;
}
table{
  font-family: Calibri; 
  color:black; 
  font-size: 13pt; 
  font-style: normal;
  font-weight: bold;
  padding-top: 100px;
  margin-top: 100px;
  padding-bottom: 100px;
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
        </style>
        <meta charset="UTF-8">
        <title>Student Information Center</title>
    </head>
    <body>       
        <h1 class="wide">Student Information Center</h1>

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
        <table>
            <tr><td>
The Web Technology Lab was aimed at preparing us to have the basic idea of the concepts of ‘Web D’ or ‘Web Development’. It’s importance in our field and how we can learn the various concepts through one big project.

The Project was to make a website which will basically serve as the information hub for the students. It would be similar to our college’s (NIT Durgapur) Chanakya website. The website had to contain several features including the necessary fields for any online websites.
The detailed description of this project is been provided in the later parts of this report.
                </td></tr></table>

<script>

           <footer>Developed by:
               <p>
                   1. Suvrojoti Paul 2. Piyush Mantri 3. Sanaulla Ansari
               </p>
           </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>

