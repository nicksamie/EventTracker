<?php include ("layouts/header.php");?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
                    <h2 style="color:black">Welcome</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
                    <h2 style="color:black">Upcoming Events</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
                    <h2 style="color:black">Happening Events</h2>
                </div>
            </div>
             <div class="item">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
                    <h2 style="color:black">Tomorrow Events</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Event Tracker
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Upcoming Events</h4>
                    </div>
                    <div class="panel-body">
                        <p> This section describes the upcoming events</p>
                        <a href="#" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Happening Events</h4>
                    </div>
                    <div class="panel-body">
                        <p>This shows the happening events</p>
                        <a href="#" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Popular Events</h4>
                    </div>
                    <div class="panel-body">
                        <p> This is the list of the most popular events.</p>
                        <a href="#" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

       
    <!-- FOOTER Content-->
    <?php include ("layouts/footer.php");?>
