<?php include('./include/db.php'); ?>
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

		<title>School's Project</title>
	</head>

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