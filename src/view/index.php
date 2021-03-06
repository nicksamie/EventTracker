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
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
                </div>
            </div>
             <div class="item">
                <div class="fill" style="background-image:url('images/test_banner.png');"></div>
                <div class="carousel-caption">
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
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                        <img src="images/test.jpg" style="width:358px;height:180px;"/>
                    <div class="panel-body">
                        <p style="font-size:15px"> This section describes the upcoming events</p>
                        <a href="#" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <img src="images/happening.png" style="width:358px;height:180px;"/>
                    <div class="panel-body">
                        <p style="font-size:17px">This shows the happening events</p>
                        <a href="#" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">                                           
                    <img src="images/test.jpg" style="width:358px;height:180px;"/>
                    <div class="panel-body">
                        <p style="font-size:17px"> This is the list of the most popular events.</p>
                        <a href="#" class="btn btn-default">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>  <!-- /.container -->
       
    <!-- FOOTER Content-->
    <?php include ("layouts/footer.php");?>
