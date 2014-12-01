<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Indoor Bootcamp</title>
    <?php include_once('includes/head.html') ?>
</head>

<body>

    <!-- Navigation -->
    <?php include_once('includes/navbar.html') ?>

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
                <div class="fill" style="background-image:url('img/slider1.png');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slider2.png');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slider3.png');"></div>
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

        
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Indoor Bootcamp</h2>
            </div>
            <div class="col-md-6">
                <p>
                    Het is een back-to-basic training, dat wil zeggen dat je grotendeels gebruik maakt van je eigen lichaamsgewicht om te verbeteren in kracht en lenigheid, maar ook je uithoudingsvermogen gaat met sprongen vooruit.
                </p>
                <p>
                    Iedereen (vrouw EN man!) kan op zijn eigen niveau meedoen, dus of je nu geoefend bent of een beginnende sporter zonder conditie, dat maakt niet uit. Dat dit “indoor” (dus in de zaal) is, is voor een hoop mensen prettig, zeker ’s winters! 
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/indoorbootcamp.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include_once('includes/footer.html') ?>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
