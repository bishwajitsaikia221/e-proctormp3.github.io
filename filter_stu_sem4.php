<?php
session_start();
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','proctord');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
if(strlen($_SESSION['username'])==0)
    {   
header('location:index.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SE | Admin Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">View Students</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Students</li>
            							<li class="active">View Students</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                          <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Students Information</h5>
                                                </div>
                                            </div>



  
 

</div>
</div>
	<?php
			if (isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif ?>

	<div class="container-fluid">
	<?php

		$mysqli = new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM sem4") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	<br>

	<div class="container-fluid">
		<table class="table" border="2" >
			
			<thead>
                <tr><th>ID</th>
                    <th>USN</th>
                    <th>NAME</th>
                    
                    
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    
                </tr>
            </thead>
            <?php
                while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['NAME']; ?></td>
                        
                    
                        <td><?php echo $row['EMAIL']; ?></td>
                        <td><?php echo $row['PHONE_NUMBER']; ?></td>
                                

                    </tr>
                    <?php endwhile; ?>
            
        </table>
	</div>
	

	<?php

		function pre_r1( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
</body>
</html>
<?php } ?>
