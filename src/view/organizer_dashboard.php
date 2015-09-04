<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include ("layouts/header.php");?>
<?php

    session_start();
    if(isset($_SESSION['email']) && $_SESSION['s_user_role'] == 'organizer') {

    }
?>
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
                <a class="navbar-brand" href="index.php">Event Notifier</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
						<button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">
                        <a href="add_new_event.php">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Create New Event</a>
                        </button>
                    </li>
                    <li>
						<button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">My Profile</button>
                    </li>
         			 <li>
						<button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">Logout</button>
          			</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
 <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="text-align:center">List Of Events</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                   <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                   <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                   <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                   <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>Event Name</h2>
                    </div>
                   <div class="panel-body">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> More</button>
                    </div>
                </div>
            </div>
        </div>
				<!--Pagination-->
			<div id="paginate">
				<ul class="pagination pagination-lg">
    				<li><a href="#">&laquo;</a></li>
    				<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    				<li><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li><a href="#">4</a></li>
    				<li><a href="#">5</a></li>
   			 		<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		        <!-- Pagination -->
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center">Copyright &copy; Event Tracker 2015</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
