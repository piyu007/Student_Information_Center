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
$_SESSION['username']=$abc;
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
     $psw=$table[17];
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
     margin-left: 0px;
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
        <script>
function formValidation()                                    
{ 
    var name = document.forms["myform"]["First_Name"].value; 
    var name2= document.forms["myform"]["Last_Name"].value;
    var name3= document.forms["myform"]["parents_name"].value
    var mob1 = document.forms["myform"]["Mobile_Number"].value;
    var reg = document.forms["myform"]["Registration_Number"].value;
    var roll= document.forms["myform"]["Roll_Number"].value;
    var city1=document.forms["myform"]["CITY"].value; 
    var state1=document.forms["myform"]["STATE"].value; 
    var prim1=document.forms["myform"]["PRIMARY_ADDRESS"].value;
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
        window.alert("Please enter your first name correctly"); 
        name.focus(); 
        return false; 
    }
    if (name2.value == "" || name2.length<=3 || /[^a-z]/i.test(name2))                                  
    { 
        window.alert("Please enter your last name correctly!"); 
        name2.focus(); 
        return false; 
    }
    if (name3.value == "" || name3.length<=3 || /[^a-z]/i.test(name3))                                  
    { 
        window.alert("Please enter your Parent's name correctly!"); 
        name3.focus(); 
        return false; 
    }
    if(mob1.value="" || mob1.length!=10 || !/^\d+$/.test(mob1))
    {
        window.alert("Please enter your mobile number correctly!"); 
        mob1.focus(); 
        return false; 
    }
    if(reg.value="" || reg.length!=8 || /[^a-zA-Z0-9]/.test(reg))
    {
        window.alert("Please enter your reg number correctly!"); 
        reg.focus(); 
        return false; 
    }
    if(roll.value="" || roll.length!=8 || /[^a-zA-Z0-9]/.test(roll))
    {
        window.alert("Please enter your roll number correctly!"); 
        roll.focus(); 
        return false; 
    }
    if (city1.value == "" || city1.length<=3 || /[^a-z]/i.test(city1))                                  
    { 
        window.alert("Please enter your city correctly"); 
        city1.focus(); 
        return false; 
    }
    if (state1.value == "" || state1.length<=3 || /[^a-z]/i.test(state1))                                  
    { 
        window.alert("Please enter your state correctly"); 
        state1.focus(); 
        return false; 
    }
    if(prim1.value="" || prim1.length<=5 || /[^a-zA-Z0-9]/.test(prim1))
    {
        window.alert("Please enter your primary address correctly!"); 
        prim1.focus(); 
        return false; 
    }
    return true; 
}
function formValidation1()                                    
{ 
    var name = document.forms["regForm1"]["myvalue"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
         document.getElementById('errorname').innerHTML="This is an invalid name";
        document.getElementById("myvalue").value="";
       
        document.getElementById("myvalue").focus();
        
    }
    else
    {
        document.getElementById('errorname').innerHTML="";
    }
   
}
function formValidation2()                                    
{ 
    var name = document.forms["regForm1"]["myvalue1"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname1').innerHTML="This is an invalid name";
        document.getElementById("myvalue1").value="";
       
        document.getElementById("myvalue1").focus();
    }
    else
    {
        document.getElementById('errorname1').innerHTML="";
    }
}
function formValidation3()                                    
{ 
    var name1 = document.forms["regForm1"]["myvalue2"].value;
    var year = name1.substr(0,4) ;
    var month=name1.substr(5,2);
    var day= name1.substr(8,10);
       var today_date = new Date();
    var today_year = today_date.getFullYear();
    var today_month = today_date.getMonth();
    var today_day = today_date.getDate();
    var age = today_year - year;

    if ( today_month < (month - 1))
    {
        age--;
    }
    if (((month - 1) == today_month) && (today_day < day))
    {
        age--;
    }
    
    if (name1 == "" )                                  
    { 
       document.getElementById('errorname2').innerHTML="This is an invalid date";
        document.getElementById("myvalue2").value="";
       
        document.getElementById("myvalue2").focus();
    }
    else if (age<15 )                                  
    { 
       document.getElementById('errorname2').innerHTML="Age cannot be less than 15";
        document.getElementById("myvalue2").value="";
       
        document.getElementById("myvalue2").focus();
    }
    else
    {
        document.getElementById('errorname2').innerHTML="";
        document.getElementById('myvalue3').value=age;
    }
}
function formValidation4()                                    
{ 
    var name = document.forms["regForm1"]["myvalue4"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z|^" "]/i.test(name))                                  
    { 
        document.getElementById('errorname4').innerHTML="This is an invalid name";
        document.getElementById("myvalue4").value="";
       
        document.getElementById("myvalue4").focus();
    }
    else
    {
        document.getElementById('errorname4').innerHTML="";
    }
}
function formValidation5()                                    
{ 
    var name1 = document.forms["regForm1"]["myvalue5"].value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (name1.value == "" || name1.length<=3 || !name1.match(mailformat))                                  
    { 
       document.getElementById('errorname5').innerHTML="This is an invalid email";
        document.getElementById("myvalue5").value="";
       
        document.getElementById("myvalue5").focus();
    }
    else
    {
        document.getElementById('errorname5').innerHTML="";
    }
}
function formValidation6()                                    
{ 
    var name1 = document.forms["regForm1"]["myvalue6"].value;
    
    if (name1.value == "" || name1.length!=8 || !/^[0-9][0-9][a-zA-Z][0-9]+$/.test(name1))                                  
    { 
       document.getElementById('errorname6').innerHTML="This is an invalid reg no";
        document.getElementById("myvalue6").value="";
       
        document.getElementById("myvalue6").focus();
    }
    else
    {
        document.getElementById('errorname6').innerHTML="";
    }
}
function formValidation7()                                    
{ 
    var name1 = document.forms["regForm1"]["myvalue7"].value;
    
    if (name1.value == "" || name1.length!=8 || !/^[0-9][0-9][a-zA-Z][a-zA-Z][0-9]+$/.test(name1))                                  
    { 
        document.getElementById('errorname7').innerHTML="This is an roll no";
        document.getElementById("myvalue7").value="";
       
        document.getElementById("myvalue7").focus();
    }
    else
    {
        document.getElementById('errorname7').innerHTML="";
    }
}
function formValidation8()                                    
{ 
    var name1 = document.forms["regForm1"]["myvalue8"].value;
    
    if (name1.value == "" || name1.length!=10 || !/^[0-9]+$/.test(name1))                                  
    { 
        document.getElementById('errorname8').innerHTML="This is an invalid mobile no";
        document.getElementById("myvalue8").value="";
       
        document.getElementById("myvalue8").focus();
    }
    else
    {
        document.getElementById('errorname8').innerHTML="";
    }
}
function formValidation9()                                    
{ 
    var name = document.forms["regForm1"]["myvalue11"].value;
    
    if (name.value == "" || name.length<=3 )                                  
    { 
       document.getElementById('errorname11').innerHTML="This is an invalid address";
        document.getElementById("myvalue11").value="";
       
        document.getElementById("myvalue11").focus();
    }
    else
    {
        document.getElementById('errorname11').innerHTML="";
    }
}
function formValidation10()                                    
{ 
    var name = document.forms["regForm1"]["myvalue12"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname12').innerHTML="This is an invalid city name";
        document.getElementById("myvalue12").value="";
       
        document.getElementById("myvalue12").focus();
    }
   else
    {
        document.getElementById('errorname10').innerHTML="";
    }
}
function formValidation11()                                    
{ 
    var name = document.forms["regForm1"]["myvalue13"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname13').innerHTML="This is an invalid state name";
        document.getElementById("myvalue13").value="";
       
        document.getElementById("myvalue13").focus();
    }
   else
    {
        document.getElementById('errorname13').innerHTML="";
    }
}
</script>
        <meta charset="UTF-8">
        <title>Student Panel</title>
    </head>
    <body>
         <section class="container content" >
            <h1 class="wide" style="text-align:center">Welcome to Admin Panel</h1>
             <ul>
                 <li><a class="active" href="admin_panel.php">Admin</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  
  <li style="float:right"><a href="logoutadmin.php"   >Logout</a></li>
  <li style="float:right"><a id="demo"></li>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</ul>
            
            
            <form id="regForm1" name="regForm1" action="admin_panel_update1.php" method="post" enctype="multipart/form-data">
       <input type="submit" value="Update" >
            <table align="left" cellpadding = "10">
 
 
    
    <tr>
        <td>1. PERSONAL</TD>
    </tr>
    <tr>
<td>1.1) FIRST NAME</td>

<Td>    <input  type="text" value="<?php echo $fn; ?>" id="myvalue" name="myvalue"  onblur="formValidation1()" required/>
</Td> </tr><tr><td><span style="color:red" id="errorname"></span></td></tr>
        
   
    <tr>
<td>1.2) LAST NAME</td>
<Td>    <input  type="text" value="<?php echo $ln; ?>" id="myvalue1" name="myvalue1"onblur="formValidation2()" required/>

</Td>
    </tr><tr><td><span style="color:red" id="errorname1"></span></td></tr>
    <tr>
<td>1.3) DOB </td>
<Td>    <input  type="date" value="<?php echo $dob; ?>" id="myvalue2" name="myvalue2" onblur="formValidation3()" required/>

</Td>
    </tr><tr><td><span style="color:red" id="errorname2"></span></td></tr>
    <tr>
<td>1.4) AGE</td>
<Td>    <input  type="text" value="<?php echo $age; ?>" id="myvalue3" name="myvalue3"/>
   
</Td>
    </tr>
    <tr>
<td>1.5) PARENT'S NAME</td>
<Td>    <input  type="text" value="<?php echo $pname; ?>" id="myvalue4" name="myvalue4"onblur="formValidation4()"required/>
    
</Td>
    </tr><tr><td><span style="color:red" id="errorname4"></span></td></tr>
    <tr>
<td>1.6) Email ID</td>
<Td>    <input readonly type="text" value="<?php echo $id; ?>" id="myvalue5" name="myvalue5" onblur="formValidation5()"required/>

</Td>
    </tr><tr><td><span style="color:red" id="errorname5"></span></td></tr>
    <tr>
<td>1.7) REG. NUMBER</td>
<Td>    <input readonly type="text" value="<?php echo $reg; ?>" id="myvalue6" name="myvalue6" onblur="formValidation6()"required/>

</Td>
    </tr><tr><td><span style="color:red" id="errorname6"></span></td></tr>
    <tr>
<td>1.8) ROLL NO</td>
<Td>    <input readonly type="text" value="<?php echo $roll; ?>" id="myvalue7" name="myvalue7" onblur="formValidation7()"required/>

</Td>
    </tr><tr><td><span style="color:red" id="errorname7"></span></td></tr>
    <tr>
<td>1.9) MOBILE NUMBER</td>
<Td>    <input  type="text" value="<?php echo $mob; ?>" id="myvalue8" name="myvalue8" onblur="formValidation8()"required/>
  
</Td>
    </tr><tr><td><span style="color:red" id="errorname8"></span></td></tr>
    <tr>
<td>1.10) GENDER</td>
<Td>    <input readonly type="text" value="<?php echo $gen; ?>" id="myvalue9" name="myvalue9" required/>

</Td>
    </tr>
    <tr>
<td>1.11) DEPARTMENT</td>
    
<td>
<select name="myvalue10" id="myvalue10"  required>
<option value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
<option value="ELECTRONICS & COMMUNICATION">ELECTRONICS & COMMUNICATION ENGINEERING</option>
<option value="ELECTRICAL">ELECTRICAL ENGINEERING</option>
<option value="MECHANICAL">MECHANICAL ENGINEERING</option>
<option value="CIVIL">CIVIL ENGINEERING</option>
<option value="BIOTECH">BIOTECH ENGINEERING</option>
<option value="METALLURGICAL & MATERIALS"> METALLURGICAL & MATERIALS ENGINEERING</option>
</select>
</td>

    </tr>
    <tr>
<td>2.1) PRIMARY ADDRESS</td>
<Td>    <input  type="text" value="<?php echo $prim; ?>" id="myvalue11" name="myvalue11" onblur="formValidation9()"required/>
 
</Td>
    </tr><tr><td><span style="color:red" id="errorname11"></span></td></tr>
    <tr>
<td>2.2) CITY</td>
<Td>    <input  type="text" value="<?php echo $city; ?>" id="myvalue12" name="myvalue12" onblur="formValidation10()"required/>
    
</Td>
    </tr><tr><td><span style="color:red" id="errorname12"></span></td></tr>
    <tr>
<td>2.3) STATE</td>
<Td>    <input  type="text" value="<?php echo $state; ?>" id="myvalue13" name="myvalue13" onblur="formValidation11()"required/>

</Td>
    </tr><tr><td><span style="color:red" id="errorname13"></span></td></tr>
    <tr>
<td>3.1) 10th PERCENTAGE</td>
<Td>    <input  type="number" max="100" step="0.01" value="<?php echo $ten; ?>" id="myvalue14" name="myvalue14"required/>

</Td>
    </tr>
    <tr>
<td>3.2) 12th PERCENTAGE</td>
<Td>    <input  type="number" max="100" step="0.01" value="<?php echo $twe; ?>" id="myvalue15" name="myvalue15"required/>
   
</Td>
    </tr>
    <tr>
<td>3.3) CGPA</td>
<Td>    <input  type="number" max="10" step="0.01" value="<?php echo $cgpa; ?>" id="myvalue16" name="myvalue16"required/>

</Td>
    </tr>
    <TR>
    <td> 4. CHANGE PASSWORD </td>
</TR> 
<TR>
    <tD>4.1) PASSWORD</tD>
    <TD><input type="password" id="psw" name="psw"value="<?php echo $psw; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ></TD>
    
</TR>
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
