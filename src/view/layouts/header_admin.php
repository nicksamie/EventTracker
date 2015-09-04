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

    <!--CSS for validation -->
     <link href="css/validation.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            .bs-example{
                margin: 20px;
        }
    </style>
</head>

<body>
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

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="add_new_event.php" class="btn btn-info" role="button">Create New Event</a>
                        <!--<button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">
                        <a href="add_new_event.php">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Create New Event</a>
                        </button>-->
                    </li>
                    <li>
                        <a href="my_profile.php" class="btn btn-info" role="button">My Profile</a>
                        <!--<a href="my_profile.php">
                        <button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">My Profile</a></button>-->
                    </li>
                     <li>
                         <a href="logout.php" class="btn btn-info" role="button">Logout</a>
                        <!-- <a href="logout.php">
                        <button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">Logout</a></button>-->
                    </li>
                </ul>
            </div>

            </div>
            <!-- /.navbar-collapse -->

            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">My Profile</button>
                    </li>
                     <li>
                        <button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">Logout</button>
                    </li>
                </ul>
            </div> -->
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