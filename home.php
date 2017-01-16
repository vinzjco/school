<?php
	include('./include/db.php'); 
	if(!$user->is_loggedin())
		{
		 $user->redirect('index.php');
		}
	$user_id = $_SESSION['user_session'];
	$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"  />
		<title>Welcome - <?php print($userRow['user_email']); ?></title>
	</head>

	<!-- <div class="header">
	 	<div class="left">
	     	<label><a href="#">Home - Senior High School</a></label>
	    </div>
	    <div class="right">
	     	<label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
	    </div>
	</div>
	<div class="content">
		Welcome : <?php print($userRow['user_name']); ?>
	</div> -->

	<body>
	<?php include 'header.php'; ?>

	<br>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<section>
	          <div class="page-header well">
	            <h2>Students. <small>The Table of Our Student in This School</small></h2>
	          </div>
	        </section>
		</div>
	</div> <!-- End Row -->
	
	<div class="row">
		<div class="col-md-12">
			<a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add Record</a>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>
					<th class="text-center">Number</th>
					<th class="text-center">Student ID</th>
					<th class="text-center">Name</th>
					<th class="text-center">Address</th>
					<th class="text-center">Year in</th>
					<th class="text-center">Date of Birth</th>
					<th class="text-center">Room ID</th>
					<th class="text-center" colspan="2">Action</th>
				</tr>
				<?php
					$query = "SELECT * FROM students ORDER BY name ASC;";
					$student->dataview($query);
				?>	    		
			</table>
		 
		</div>
	</div> <!-- End Row -->
	</div> <!-- End Container -->

     <!-- jQuery (necessary for bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
	</body>
</html>