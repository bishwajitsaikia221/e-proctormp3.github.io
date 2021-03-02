
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Student| Select Semester </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        



    <meta charset="UTF-8">
    <title>I Semester</title>
    <style>


#sem1 {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 60%;
  min-width: 300px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

    


<body id="bg">
<div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('topbarSTU.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('leftbarSTU.php');?>  
                    <!-- /.left-sidebar -->


<div class="container-fluid">
<form action="insert1.php" method="POST">
  <?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "proctord";
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);
//Checking connection
if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}
if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $usn  = $_POST['usn'];
  if (mysqli_query("Insert into diary_sem1(name,usn) values ('$name','$usn')"))
  {
    header("insert1.php");
    exit;
  }
 }
?>

<h2><center>I SEMESTER</center></h2></br>
<div style="overflow-x:auto;">

<table align="center">
<tr>
      <th>Name</th>
      <th>USN</th>
    <th>Semester</th></tr>
    <td>Pushpa Kh</td>
    <td>1bm18mca17</td>
    <td>5th Semester</td>
  </table>
   
    <div class="content-container">
      <form method="POST" action="">
  <table align="center">
    <tr>
      <th>SL.NO.</th>
      <th>Subject Code</th>
      <th>Course Title</th>
    <th>Faculty Name </th>
      <th>Credits</th>
      <th>CIE</th>
      <th>SEE</th>
      <th><button onclick="add()">Grade</button></th>

    </tr>
   
    <tr>
      <td>1</td>
      <td>18MCA1PCUC</td>
      <td>Unix & Advanced C Programming</td>
   
    <td><input type="text" name="ucfname" value="<?php if(isset($_POST['ucfname'])) { echo $_POST['ucfname']; } ?>" maxlength="20" size="10" required/></td>
     
      <td>5</td>
      <td><input type="number" name="cieuc" min="1" max="40" maxlength="2" size="5" id="uc" required /></td>
      <td><input type="number" name="seeuc" min="1" max="100" maxlength="3" size="5" id="suc"  required /></td>
      <td><input type="text" name="gradeuc"  maxlength="1" size="5" id="answer" required /></td>

  

      </td>
    </tr>

   <tr>
      <td>2</td>
      <td>18MCA1PCCO </td>
      <td>Computer Organization</td>
      <td><input type="text" name="cofname" value="<?php if(isset($_POST['cofname'])) { echo $_POST['cofname']; } ?>" maxlength="20" size="10" required/></td>
   
      <td>3</td>
  <td><input type="number" name="cieco" min="1" max="40" maxlength="2" size="5"  id="cof" required /></td>
      <td><input type="number" name="seeco" min="1" max="100" maxlength="3" size="5" id="scof" required /></td>
      <td><input type="text" name="gradeco"  maxlength="1" size="5" id="answe" required /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>18MCA1BSDM</td>
      <td>Discrete Mathematics</td>
       <td><input type="text" name="dmfname" value="<?php if(isset($_POST['dmfname'])) { echo $_POST['dmfname']; } ?>" maxlength="20" size="10" required/></td>

      <td>4</td>
     <td><input type="number" name="ciedm" min="1" max="40" maxlength="2" size="5" id="cdmf" required /></td>
      <td><input type="number" name="seedm" min="1" max="100" maxlength="3" size="5" id="sdmf" required /></td>
      <td><input type="text" name="gradedm"  maxlength="1" size="5" id="d" required /></td>

    </tr>
  <tr>
      <td>4</td>
      <td>18MCA1PCWD</td>
      <td>Web Application Development</td>
       <td><input type="text" name="wdfname" value="<?php if(isset($_POST['wdfname'])) { echo $_POST['wdfname']; } ?>" maxlength="20" size="10" required/></td>
    
      <td>4</td>
    <td><input type="number" name="ciewd" min="1" max="40" maxlength="2" size="5" id="cwdf" required /></td>
      <td><input type="number" name="seewd" min="1" max="100" maxlength="3" size="5" id="swdf" required /></td>
      <td><input type="text" name="gradewd"  maxlength="1" size="5" id="w" required /></td>

    </tr>
  <tr>
      <td>5</td>
      <td>18MCA1PCOS</td>
      <td>Operating System</td>
     <td><input type="text" name="osfname" value="<?php if(isset($_POST['osfname'])) { echo $_POST['osfname']; } ?>" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieos" min="1" max="40" maxlength="2" size="5" id="cosf" required /></td>
      <td><input type="number" name="seeos" min="1" max="100" maxlength="3" size="5" id="sosf" required /></td>
      <td><input type="text" name="gradeos"  maxlength="1" size="5" id="os" required /></td>

    </tr>
  <tr>
      <td>6</td>
      <td>18MCA1HSPE</td>
      <td>Professional Communication and Ethics</td>
     <td><input type="text" name="pefname" value="<?php if(isset($_POST['pefname'])) { echo $_POST['pefname']; } ?>" maxlength="20" size="10" required/></td>
      <td>2</td>
    <td><input type="number" name="ciepe" min="1" max="40" maxlength="2" size="5" id="cp" required /></td>
      <td><input type="number" name="seepe" min="1" max="100" maxlength="3" size="5" id="sp" required /></td>
      <td><input type="text" name="gradepe"  maxlength="1" size="5" id="s" required /></td>

    </tr>
  <tr>
      <td colspan="4">Total</td>
      <td>22</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  </table></form></div>
 
  <table align="center">
      <th>Number of Credits Earned </th>
        <td>22</td>
      </th>
      <th><button onclick="add()">CGPA </button><input maxlength="4" name="c"  id="cgpa" /></th>
      <th><button onclick="add()">SGPA </button><input  maxlength="4" name="s" id="sgpa" /></th>
      
  </table>
</div>

    <div align="center">
     
    </div>
    
</form>
<script type="text/javascript">
  function mess()
  {
    alert("Your record is successfully saved!");
    return true;

  }

</script>


            
             
                     
          </div>
      </div>

    </div>
      <div class="app-form-group showdata">
              <p id="showData" >  </p>
     </div>
  </div>
</div>


 
 <script>
function add(){
var a,b,c;
a=Number(document.getElementById("uc").value);
b=Number(document.getElementById("suc").value);
c= a + (.6*b);

 
  if(c <= 100  && c >= 90){
    grades = 'O';
  }else if(c <= 90  && c >= 80){
     grades = 'S';
  }else if(c <= 80  && c >= 70){
     grades = 'A';
  }else if(c <= 70  && c >= 60){
     grades = 'B';
  }else if(c <= 60  && c >= 50){
     grades = 'C';
  }else if(c <= 50  && c >= 45){
     grades = 'D';
  }else if(c <= 45  && c >= 40){
     grades = 'E';
  }
  else{
     grades = 'F';
  }

document.getElementById("answer").value= grades;

var a1,b1,c1;
a1=Number(document.getElementById("cof").value);
b1=Number(document.getElementById("scof").value);
c1= a1 + (.6*b1);
if(c1 <= 100  && c1 >= 90){
    grades = 'O';
  }else if(c1 <= 90  && c1 >= 80){
     grades = 'S';
  }else if(c1 <= 80  && c1 >= 70){
     grades = 'A';
  }else if(c1 <= 70  && c1 >= 60){
     grades = 'B';
  }else if(c1 <= 60  && c1 >= 50){
     grades = 'C';
  }else if(c1 <= 50  && c1 >= 45){
     grades = 'D';
  }else if(c1 <= 45  && c1 >= 40){
     grades = 'E';
  }
  else{
     grades = 'F';
  }
document.getElementById("answe").value= grades;


var a2,b2,c2;
a2=Number(document.getElementById("cdmf").value);
b2=Number(document.getElementById("sdmf").value);
c2= a2 + (.6*b2);
if(c2 <= 100  && c2 >= 90){
    grades = 'O';
  }else if(c2 <= 90  && c2 >= 80){
     grades = 'S';
  }else if(c2 <= 80  && c2 >= 70){
     grades = 'A';
  }else if(c2 <= 70  && c2 >= 60){
     grades = 'B';
  }else if(c2 <= 60  && c2 >= 50){
     grades = 'C';
  }else if(c2 <= 50  && c2 >= 45){
     grades = 'D';
  }else if(c2 <= 45  && c2 >= 40){
     grades = 'E';
  }
  else{
     grades = 'F';
  }
document.getElementById("d").value= grades;

var a3,b3,c3;
a3=Number(document.getElementById("cwdf").value);
b3=Number(document.getElementById("swdf").value);
c3= a3 + (.6*b3);
if(c3 <= 100  && c3 >= 90){
    grades = 'O';
  }else if(c3 <= 90  && c3 >= 80){
     grades = 'S';
  }else if(c3 <= 80  && c3 >= 70){
     grades = 'A';
  }else if(c3 <= 70  && c3 >= 60){
     grades = 'B';
  }else if(c3 <= 60  && c3 >= 50){
     grades = 'C';
  }else if(c3 <= 50  && c3 >= 45){
     grades = 'D';
  }else if(c3 <= 45  && c3 >= 40){
     grades = 'E';
  }
  else{
     grades = 'F';
  }
document.getElementById("w").value= grades;

var a4,b4,c4;
a4=Number(document.getElementById("cosf").value);
b4=Number(document.getElementById("sosf").value);
c4= a4 + (.6*b4);
if(c4 <= 100  && c4 >= 90){
    grades = 'O';
  }else if(c4 <= 90  && c4 >= 80){
     grades = 'S';
  }else if(c4 <= 80  && c4 >= 70){
     grades = 'A';
  }else if(c4 <= 70  && c4 >= 60){
     grades = 'B';
  }else if(c4 <= 60  && c4 >= 50){
     grades = 'C';
  }else if(c4 <= 50  && c4 >= 45){
     grades = 'D';
  }else if(c4 <= 45  && c4 >= 40){
     grades = 'E';
  }
  else{
     grades = 'F';
  }
document.getElementById("os").value= grades;

var a5,b5,c5;
a5=Number(document.getElementById("cp").value);
b5=Number(document.getElementById("sp").value);
c5= a5 + (.6*b5);
if(c5 <= 100  && c5 >= 90){
    grades = 'O';
  }else if(c5 <= 90  && c5 >= 80){
     grades = 'S';
  }else if(c5 <= 80  && c5 >= 70){
     grades = 'A';
  }else if(c5 <= 70  && c5 >= 60){
     grades = 'B';
  }else if(c5 <= 60  && c5 >= 50){
     grades = 'C';
  }else if(c5 <= 50  && c5 >= 45){
     grades = 'D';
  }else if(c5 <= 45  && c5 >= 40){
     grades = 'E';
  }
  else{
     grades = 'F';
  }
document.getElementById("s").value= grades;


var total;

total=(c+c1+c2+c3+c4+c5)/60;
  
  document.getElementById("sgpa").value= total;
  document.getElementById("cgpa").value= total;
}



</script>



</body>
</html>
</div>
</body>
</html>
