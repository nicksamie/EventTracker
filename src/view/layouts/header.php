<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Event Tracker</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/simple-sidebar.css" rel="stylesheet">
	<!--CSS for validation -->
	 <link href="css/validation.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/modern-business.css" rel="stylesheet">

	<!-- Custom Fonts -->
	   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		$(document).ready(function(){
			$(".close").click(function(){
				$("#myAlert").alert('close');
			});
		});  
	</script>

	<style type="text/css">
		.bs-example{
			margin: 20px;
		}
		body{
			background-color:rgba(148, 241, 148, 0.4);
		}
		span.glyphicon {
	    font-size: 30px;  
	}
	</style>
</head>

<body>

	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <h3 style="text-align:center"> Categories</h3>
                </li>
                <li>
                    <a href="#">PHP Meet Up</a>
                </li>
                <li>
                    <a href="#">Blood Donation</a>
                </li>
                <li>
                    <a href="#">Futsal</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Notices</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper ---->
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="index.php">Event Notifier</a> -->
				 <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="background-color:rgba(255, 255, 255, 0);border-color:black;color:white;" class="hidden"> 
				 <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                 <a href="index.php"><img src="images/logo.gif" alt="Logo" title="Event Tracker Logo" style="height:50px;width:250px;"/></a>
			</div>



			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="about_us.php">About Us</a>
					</li>
					<li>
						<a href="contact_us.php">Contact Us</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href='index.php?id=happening'>Happening</a>
							</li>
							<li>
								<a href='index.php?id=popular'>Popular</a>
							</li>
							<li>
								<a href='index.php?id=upcoming'>Upcoming Events</a>
							</li>
						</ul>
					</li>
					 <li class="dropdown" id="menuLogin" class="<?php echo $header_class;?>">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
							<div class="dropdown-menu" style="padding:17px;">
								<form class="col-md-12" action="login.php" method="post"> <!--newly updated-->
									<div class="form-group">
										<input type="text" name="email" class="form-control input-lg" placeholder="Email" style="width:236px">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control input-lg" placeholder="Password" style="width:236px">
									</div>
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="width:109px;">Sign In</button>
										<span class="pull-right"><a href="new_registration.php">Register</a></span>
									</div>
								</form>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- END OF HEADER-->

  <!-- jQuery-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
	</script>

	<script>
		$(document).ready(function(){
			$("#admin-panel").click(function(){
				$(this).toggle();
			});
		});
	</script>
	 <script>
	    $(document).ready(function(){
	    	$("#wrapper").hide();
	    });
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggle(5);
	        
	    });
    </script>
    