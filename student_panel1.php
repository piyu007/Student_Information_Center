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
$abc=$_SESSION['username'];
$result = mysqli_query($con,"select * from register where `Email ID` like '$abc' "); // run the query and assign the result to $result 
     $table = mysqli_fetch_array($result); 
     $fn=$table[0];
     $ln=$table[1];
     $dob=$table[2];
     $age=$table[3];
     $pname=$table[4];
     $id=$table[5];
     $reg=$table[6];
     $roll=$table[7];
     $mob=$table[8];
     $gen=$table[9];
     $dept=$table[10];
     $prim=$table[11];
     $city=$table[12];
     $state=$table[13];
     $twe=$table[14];
     $ten=$table[15];
     $cgpa=$table[16];
     $image=$table[19];
}     
      
?>
<html>
    <head>
        <style>
            body{
                background-image: url("i.jpg");
                background-repeat: no-repeat;
                background-size: 100% ;
                background-color: #cccccc;
            }
            table{
  font-family: Calibri; 
  color:black; 
  font-size: 13pt; 
  font-style: normal;
  font-weight: bold;
  background-color: graytext;  
  border: 3px solid black;
   padding-left: 10px;
     margin-left: 130px;
margin-top: 30px;
      
}
table{
  font-family: Calibri; 
  color:black; 
  font-size: 13pt; 
  font-style: normal;
  font-weight: bold;
  background-color: graytext;  
  border: 3px solid black;
   padding-left: 10px;
    
margin-right: 40px;
      
}
table.inner{
  border: 0px
}
          h1 {
    font-size: 45px;
    background-color: gray;
    color: white;
    text-align: center;
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
  bottom: -270px;
  text-align: center;
  width: 100%;
  height: 60px;
  background-color: #111;
  color: white;
}
        </style>
        <meta charset="UTF-8">
        <title>Student Panel</title>
    </head>
    <body>
         <section class="container content" >
            <h1 class="wide" style="text-align:center">Welcome to Student Panel</h1>
             <ul>
            
  
  <li style="float:right"><a href="logout.php"   >Logout</a></li>
  <li style="float:right"><a id="demo"></li>

<script>
     history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</ul>
            
            
                 <input readonly type="submit" value="Update" onclick="location.href='student_panel.php';">
            <table align="left" cellpadding = "10">
 
 
    
    <tr>
        <td>1. PERSONAL</TD>
    </tr>
    <tr>
<td>1.1) FIRST NAME</td>

<Td>    <input readonly  type="text" value="" id="myvalue" name="myvalue" />
    <script>
    document.getElementById('myvalue').value = '<?php echo $fn; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.2) LAST NAME</td>
<Td>    <input readonly  type="text" value="" id="myvalue1" name="myvalue1" />
    <script>
    document.getElementById('myvalue1').value = '<?php echo $ln; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.3) DOB </td>
<Td>    <input readonly  type="text" value="" id="myvalue2" name="myvalue2"/>
    <script>
    document.getElementById('myvalue2').value = '<?php echo $dob; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.4) AGE</td>
<Td>    <input readonly  type="text" value="" id="myvalue3" name="myvalue3"/>
    <script>
    document.getElementById('myvalue3').value = '<?php echo $age; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.5) PARENT'S NAME</td>
<Td>    <input readonly  type="text" value="" id="myvalue4" name="myvalue4"/>
    <script>
    document.getElementById('myvalue4').value = '<?php echo $pname; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.6) Email ID</td>
<Td>    <input readonly readonly type="text" value="" id="myvalue5" name="myvalue5"/>
    <script>
    document.getElementById('myvalue5').value = '<?php echo $id; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.7) REG. NUMBER</td>
<Td>    <input readonly readonly type="text" value="" id="myvalue6" name="myvalue6"/>
    <script>
    document.getElementById('myvalue6').value = '<?php echo $reg; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.8) ROLL NO</td>
<Td>    <input readonly readonly type="text" value="" id="myvalue7" name="myvalue7"/>
    <script>
    document.getElementById('myvalue7').value = '<?php echo $roll; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.9) MOBILE NUMBER</td>
<Td>    <input readonly  type="text" value="" id="myvalue8" name="myvalue8"/>
    <script>
    document.getElementById('myvalue8').value = '<?php echo $mob; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.10) GENDER</td>
<Td>    <input readonly  type="text" value="" id="myvalue9" name="myvalue9"/>
    <script>
    document.getElementById('myvalue9').value = '<?php echo $gen; ?>';</script>
</Td>
    </tr>
    <tr>
<td>1.11) DEPARTMENT</td>
<Td>    <input readonly  type="text" value="" id="myvalue10" name="myvalue10"/>
    <script>
    document.getElementById('myvalue10').value = '<?php echo $dept; ?>';</script>
</Td>
    </tr>
    <tr>
<td>2.1) PRIMARY ADDRESS</td>
<Td>    <input readonly  type="text" value="" id="myvalue11" name="myvalue11"/>
    <script>
    document.getElementById('myvalue11').value = '<?php echo $prim; ?>';</script>
</Td>
    </tr>
    <tr>
<td>2.2) CITY</td>
<Td>    <input readonly  type="text" value="" id="myvalue12" name="myvalue12"/>
    <script>
    document.getElementById('myvalue12').value = '<?php echo $city; ?>';</script>
</Td>
    </tr>
    <tr>
<td>2.3) STATE</td>
<Td>    <input readonly  type="text" value="" id="myvalue13" name="myvalue13"/>
    <script>
    document.getElementById('myvalue13').value = '<?php echo $state; ?>';</script>
</Td>
    </tr>
    <tr>
<td>3.1) 10th PERCENTAGE</td>
<Td>    <input readonly  type="text" value="" id="myvalue14" name="myvalue14"/>
    <script>
    document.getElementById('myvalue14').value = '<?php echo $ten; ?>';</script>
</Td>
    </tr>
    <tr>
<td>3.2) 12th PERCENTAGE</td>
<Td>    <input readonly  type="text" value="" id="myvalue15" name="myvalue15"/>
    <script>
    document.getElementById('myvalue15').value = '<?php echo $twe; ?>';</script>
</Td>
    </tr>
    <tr>
<td>3.3) CGPA</td>
<Td>    <input readonly  type="text" value="" id="myvalue16" name="myvalue16"/>
    <script>
    document.getElementById('myvalue16').value = '<?php echo $cgpa; ?>';</script>
</Td>
    </tr>
      <table align="right" cellpadding = "10">
 
    <tr>
<td>IMAGE</td>

<td>
    <?php  echo '<dd>'
     . '<img src="data:image/jpeg;base64,' . base64_encode($table['image']) . '" width="290" height="290">'
     . '</dd>';
?>
</td>

    </tr>
      </table>
     </form>
            </section>
       
    </body>
</html>
