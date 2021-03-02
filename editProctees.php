<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	    <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| Edit </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<style>
	#read-more {
        position: absolute;
        top: 0;
        right: 0;
    }

</style>
	
</head>
<body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    <h2 class="title">Edit Data</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-2">
                                    <ul class="breadcrumb">
                                        <li><a href="manage_proctor.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Edit</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>

                        
  <div class="scrollmenu">
  <div weight="50%">

<div class="container">
	
	<!--<div id="read-more" class="btn btn-default pull-right">
<button class="btn btn-warning" onclick="javascript:confirmationDelete($(this))" return ="false" href="stu_delete_sem1.php">Remove All Data</a></button>
</div>-->

</div>
<script>
/*function myFunction() {
  confirm("Are you sure,You want to delete all the data!");
}*/
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>


	<?php require_once 'editProcteesProcess.php'; ?>


		<?php


			if (isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif ?>

	<div class="container">
	<?php

		$mysqli = new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM procteespln  ") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
</div>
 <div class="container-fluid">
	 <div class="main-page">
	 	   <div class="row">
   <div class="col-md-12">
    <div class="panel">
                                           
    <div class="panel-body">

                    
                            
                                	 <section class="section">
                            

                             

                                <div class="row">
                                    <div class="col-md-12">

	<!--<div class="row justify-content-center">-->
		<table class="table" border="2">
			<h3 align="center">EDIT YOUR DETAILS </h3>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>USN</th>
					<th>SEM</th>
					<th>EMAIL</th>
					<th>PHONE NUMBER</th>
					
					
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<?php
				while($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['ID']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['NAME']; ?></td>
						<td><?php echo $row['SEM']; ?></td>
						<td><?php echo $row['EMAIL']; ?></td>
						<td><?php echo $row['PHONE_NUMBER']; ?></td>
						<td>
							<a href="editProctees.php?edit=<?php echo $row['ID']; ?>"
							class="btn btn-info">Edit</a>
							<a href="editProcteesProcess.php?delete=<?php echo $row['ID']; ?>"
							class="btn btn-danger">Delete</a>
						</td>

					</tr>
					<?php endwhile; ?>
			
		</table>
	</div>
</div>
</section>
</div>
	
	<?php

		function pre_r( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
		<form action="editProcteesProcess.php" method="POST">

			
<div class="form-group">
				<label>ID</label>
					<input type="text" name="id" class="form-control" value="<?php echo $ID; ?>"  required>
			</div>

			<div class="form-group">
				<label>NAME</label>
					<input type="text" name="name" class="form-control" value="<?php echo $NAME; ?>"  required="" > 
			</div>


			<div class="form-group">
				<label>USN</label>
					<input type="text" name="usn" class="form-control" value="<?php echo $username; ?>" required=""> 
			</div>

			<div class="form-group">
				<label>Semester</label>
					<input type="text" name="sem1" class="form-control" value="<?php echo $SEM; ?>"  required="">
			</div>
			<div class="form-group">
				<label>EMAIL</label>
					<input type="text" name="email" class="form-control" value="<?php echo $EMAIL; ?>"  required="">
			</div>
			<div class="form-group">
				<label>PHONE NUMBER</label>
					<input type="text" name="phno" class="form-control" value="<?php echo $PHONE_NUMBER; ?>"  required="">
			</div>





			 <div class="form-group">
			 	<?php

			 		if ($update == true):
			 	?>
			 	<button type="submit" class="btn btn-info" name="update">Update</button>

			 	<?php else: ?>


			 		<button type="submit" class="btn btn-primary" name="save">Save</button>
			 	<?php endif; ?>
			 	

			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
    	    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
</div>
</div></div>
</body>
</html>
